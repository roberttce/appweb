<?php

namespace App\Http\Controllers;

use App\Models\TPerson;
use App\Models\TUser;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Session\SessionManager;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
class PersonController extends Controller
{
    public function personUpdate($idPerson ,Request $request,SessionManager $sessionManager){
        if ($request->isMethod('post')) {
            $listMessage = [];
    
            // Validaciones de los campos del formulario
            $validator = Validator::make($request->all(), [
                'firstName' => 'required',
                'surName' => 'required',
                'dni' => 'required|numeric',
                'birthDate' => 'required',
                'phone' => 'required|numeric',
                'email' => 'required|email',
                'role' => 'required',
            ], [
                'firstName.required' => 'El campo "Nombre" es requerido.',
                'surName.required' => 'El campo "Apellido" es requerido.',
                'dni.required' => 'El campo "DNI" es requerido.',
                'dni.numeric' => 'El campo "DNI" debe ser numérico.',
                'birthDate.required' => 'El campo de la "Fecha de nacimiento" es requerido.',
                'phone.required' => 'El campo "Teléfono" es requerido.',
                'phone.numeric' => 'El campo "Teléfono" debe ser numérico.',
                'email.required' => 'El campo "Correo electrónico" es requerido.',
                'email.email' => 'Por favor, ingrese un correo electrónico válido.',
                'role.required' => 'El campo "Rol" es requerido.',
            ]);
    
            if ($validator->fails()) {
                $errors = $validator->errors()->all();
                foreach ($errors as $value) {
                    $listMessage[] = $value;
                }
            }
    
            // Verificar si el DNI o el correo electrónico ya existen en la base de datos
            if (TPerson::where('dni', $request->input('dni'))->where('idPerson', '!=', $idPerson)->exists()) {
                $listMessage[] = 'El DNI ya fue registrado con anterioridad.';
            }
            if (TPerson::where('email', $request->input('email'))->where('idPerson', '!=', $idPerson)->exists()) {
                $listMessage[] = 'El correo electrónico ya fue registrado con anterioridad.';
            } 
            // Verificar si se está cambiando el rol y si es necesario crear un nuevo usuario
            $tPerson = TPerson::find($idPerson);
            if ($tPerson) {
                if ($tPerson->role !== $request->input('role')) {
                    if ($request->input('role') === 'admin' || $request->input('role') === 'teacher') {
                        $tUser = TUser::where('email', $request->input('email'))->first();
                        if (!$tUser) {
                            $tUser = new TUser();
                            $tUser->idUser = uniqid();
                            $tUser->email = $request->input('email');
                            $tUser->password = Hash::make($request->input('dni'));
                            $tUser->save();
                        }
                        $tPerson->idUser = $tUser->idUser;
                    }
                } elseif ($tPerson->role === 'admin' || $tPerson->role === 'teacher') {
                    $tUser = TUser::where('email', $request->input('email'))->first();
                    if ($tUser && $tUser->email !== $request->input('email')) {
                        // Si el correo electrónico ha cambiado, actualizar el registro en TUser
                        $tUser->email = $request->input('email');
                        $tUser->save();
                    }
                }
            }
            $fechaCarbon = Carbon::createFromFormat('d/m/Y', $request->input('birthDate'));
            $fechaTextoAlmacenar = $fechaCarbon->format('Y-m-d');
            // Actualizar los datos de la persona
            $tPerson->firstName = $request->firstName;
            $tPerson->surName = $request->surName;
            $tPerson->dni = $request->dni;
            $tPerson->birthDate =$fechaTextoAlmacenar;
            $tPerson->phone = $request->phone;
            $tPerson->email = $request->email;
            $tPerson->role = $request->role;
            $tPerson->save();
            $sessionManager->flash('listMessage', ['Registro actualizado correctamente.']);
			$sessionManager->flash('typeMessage', 'success');
            return redirect('admin');
        }
        return redirect('admin/getall');    
    }
}
