<?php
namespace App\Http\Controllers;

use App\Models\TEnrolled;
use App\Models\TUser;
use App\Models\TPerson;
use App\Models\TCourse;
use Illuminate\Http\Request;
use Illuminate\Session\SessionManager;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
class AdminController  extends Controller{
     
    public function index(){  
        return view("admin.admin");
    }
     
    public function actionGetAll()
    {
        $listTPerson = TPerson::all();
        return view('admin.getall', [
            'listTPerson' => $listTPerson
        ]);
    }
    public function courseGetAll()
    {
        $listTCourse = TCourse::all();
        return view('admin.course', [
            'listTCourse' => $listTCourse
        ]);
    }
    public function personDelete($idPerson, SessionManager $sessionManager)
	{
		$tPerson = TPerson::find($idPerson);
		$idUser= TPerson::where('idPerson', $idPerson)->pluck('idUser')->first();
        if($idUser!=null){
            $tUser = TUser::find($idUser);
            $tUser->delete();
        }
		if($tPerson != null)
		{
            $tEnrroled = TEnrolled::where('idPerson', $idPerson);

            $tEnrroled->delete();
			$tPerson->delete();

		}

		$sessionManager->flash('listMessage', ['Registro eliminado correctamente.']);
		$sessionManager->flash('typeMessage', 'success');

		return redirect('admin/getall');
	}
    public function viewPerson(Request $request){
        return view('admin.viewPerson');
    }
    public function actionInsert(Request $request,SessionManager $sessionManager){
        if($request->isMethod('post'))
		{
            $listMessage = [];
            $validator = Validator::make(
                [
                    'firstName' => trim($request->input('firstName')),
                    'surName' => trim($request->input('surName')),
                    'dni' => trim($request->input('dni')),
                    'birthDate' => trim($request->input('birthDate')),
                    'phone' => trim($request->input('phone')),
                    'email' => trim($request->input('email')),
                    'role' => trim($request->input('role'))
                ],
                [
                    'firstName' => 'required',
                    'surName' => 'required',
                    'dni' => 'required|numeric',
                    'birthDate' => 'required',
                    'phone' => 'required|numeric',
                    'email' => 'required|email',
                    'role' => 'required',
                ],
                [
                    'firstName.required' => 'El campo "Nombre" es requerido.',
                    'surName.required' => 'El campo "Apellido" es requerido.',
                    'dni.required' => 'El campo "DNI" es requerido.',
                    'birthDate.required' => 'El campo de la "fecha de nacimiento" es requerido.',
                    'phone.required' => 'El campo "Teléfono" es requerido.',
                    'email.required' => 'El campo "Correo electrónico" es requerido.',
                    'email.email' => 'Por favor, ingrese un correo electrónico válido.',
                    'role.required' => 'El campo "Rol" es requerido.',
                ]
            );
            
            if($validator->fails())
            {
                $errors = $validator->errors()->all();
                foreach($errors as $value)
                {
                    $listMessage[] = $value;
                }
            }

            if (TPerson::where('dni', $request->input('dni'))->first() !== null) {
                $listMessage[] = 'El dni ya fue registrada con anterioridad.';
            }
            if (TPerson::where('email', $request->input('email'))->first() !== null) {
                $listMessage[] = 'El correo electrónico ya fue registrado con anterioridad.';
            }        
            if(count($listMessage) > 0) {
                $sessionManager->flash('listMessage', $listMessage);
                $sessionManager->flash('typeMessage', 'error');

                return redirect('admin/getall');
            }
            $tPerson = new TPerson();
            if('admin'== $request->input('role')|| "teacher"== $request->input('role')){
                $tUser=new TUser();
                $tUser->idUser = uniqid();
                $tUser->email = $request->input('email');
                $tUser->password = Hash::make($request->input('dni'));
                $tUser->save();
                $tPerson->idUser = $tUser->idUser;
            }
            $tPerson->idPerson = uniqid(); 
            $tPerson->firstName = $request->firstName;  
            $tPerson->surName = $request->surName; 
            $tPerson->dni = $request->dni;  
            $tPerson->birthDate = $request->birthDate;
            $tPerson->phone = $request->phone; 
            $tPerson->email = $request->email; 
            $tPerson->role = $request->role;
            $tPerson->save(); 
            $sessionManager->flash('listMessage', ['Registro realizado correctamente.']);
			$sessionManager->flash('typeMessage', 'success');
            return redirect('admin/getall');
        }
        return redirect('admin/getall');
    }
    public function courseInsert(Request $request ,SessionManager $sessionManager){
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'code' => 'required',
            'name' => 'required',
            'category' => 'required',
            'description' => 'required',
            'modality' => 'required',
        ]);
    
         
        $existingCourseByCode = TCourse::where('code', $request->code)->first();
    
        if ($existingCourseByCode) {
            $sessionManager->flash('listMessage', ['El curso con este código ya existe en la base de datos.']);
            $sessionManager->flash('typeMessage', 'error');
            return redirect()->back();
        }
        $existingCourseByName = TCourse::where('name', $request->name)->first();
    
        if ($existingCourseByName) {
            $sessionManager->flash('listMessage', ['El curso con este nombre ya existe en la base de datos.']);
            $sessionManager->flash('typeMessage', 'error');
            return redirect()->back();
        }

        $course = new TCourse();
        $course->idCourse = uniqid();
        $course->code = $request->code;
        $course->name = $request->name;
        $course->category = $request->category;
        $course->requisites = 'Ninguno';
        $course->description = $request->description;
        $course->modality = $request->modality;
        $course->save();

        $sessionManager->flash('listMessage', ['Registro realizado correctamente.']);
        $sessionManager->flash('typeMessage', 'success');
        return redirect('admin/course');
    }
    public function courseDelete($idCourse, SessionManager $sessionManager) {
        $course = TCourse::find($idCourse);
    
        if (!$course) {
            $sessionManager->flash('listMessage', ['El curso no existe.']);
            $sessionManager->flash('typeMessage', 'error');
            return redirect()->back();
        }
    
        // Elimina el curso
        $course->delete();
    
        $sessionManager->flash('listMessage', ['El curso ha sido eliminado correctamente.']);
        $sessionManager->flash('typeMessage', 'success');
        return redirect('admin/course');
    }
    
    
}
?>