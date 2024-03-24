<?php
namespace App\Http\Controllers;
use App\Models\TUser;
use App\Models\TPerson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class LoginController  extends Controller{
    public function index(){
        return view("login/login");
    }
    public function actionLogin(Request $request)
    {
        $request->validate([
            'txtUser' => 'required|email',
            'txtPassword' => 'required',
        ]);
    
        $email = $request->input('txtUser');
        $password = $request->input('txtPassword');
    
        // Buscar al usuario por su email
        $user = TUser::where('email', $email)->first();
    
        if (!$user) {
            $error = "No se encontró ninguna cuenta asociada a este correo electrónico. Por favor, verifique sus credenciales.";
            Session::flash('error', $error);
            return redirect('login');
        }
        if ($user->password !== $password) {
            $error = "La contraseña proporcionada es incorrecta";
            Session::flash('error', $error);
            return redirect('login');
        }
    
        
        $role = $user->person->role;
    
        Session::put('firstName', $user->person->firstName);
        Session::put('surName', $user->person->surName);
        Session::put('role', $role);

        switch ($role) {
            case 'teacher':
                return redirect()->route('teacher');
            case 'admin':
                return redirect()->route('admin');
            case 'student':
                return redirect('student');
            default:
                $error = "Rol de usuario no válido";
                Session::flash('error', $error);
                return redirect('login');
        }
    }
    public function logout() {
        Session::flush(); // Eliminar todas las variables de sesión
        Auth::logout(); // Cerrar sesión del usuario
        return redirect('login');    
    }
    
    /*public function actionLogin000(Request $request){
        $request -> validate(
            [
                'txtUser'=> 'required',
                'txtPassword'=> 'required',
            ]
        );
        $usuario = $request->input('txtUser');
        $contrasena = $request->input('txtPassword');
        $user = TUser::where('email', $usuario)->first();
        if ($user) {
            $usuarioEncontrado = TUser::where('email', $usuario)->where('password', $contrasena)->first();
            if ($usuarioEncontrado) {
                $idUser = TPerson::where('email', $usuario)->value('idUser');
                $user = TPerson::where('idUser', $idUser)->first();
                
                if (!$user) {
                    redirect('login');
                }
                else{
                    $role=$user->role;
                    $firstName = $user->firstName;
                    $surName = $user->surName;
                    Session::put('firstName', $firstName);
                    Session::put('surName', $surName);
                }
                
                if($role=="teacher"){  
                    return redirect('teacher')->with('idUser', $idUser);//->with(['firstName' => $firstName, 'surName' => $surName]);
                }

                elseif($role== "admin"){
                    return redirect("admin")->with('idUser', $idUser);
                }
                elseif($role== "student"){
                    return redirect("student")->with('idUser', $idUser);
                }   
            }
            else{
                $error="usuario no existe";
                Session::flush();
                return redirect("login");
            }
        } else {
            $error = "Lo sentimos, no se encontró una cuenta activa asociada a este correo electrónico. Es posible que su cuenta aún no haya sido activada. Por favor, póngase en contacto con el administrador del sistema para obtener ayuda adicional.";
            Session::flash('error', $error);
            return redirect("login");
        }
    }
    public function actionLogin03(Request $request){

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $usuario = $request->input('email');
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)==false) {  
            $idUser = TPerson::where('email',$usuario )->value('idUser');
            $user = TPerson::where('idUser', $idUser)->first();
            $role=$user->role;
            if ($role == "teacher") {
                return redirect('teacher');
            } elseif ($role == "admin") {
                return redirect("admin");
            } elseif ($role == "student") {
                return redirect("student");
            } else {
                $error = "Rol de usuario no válido";
                Auth::logout();
                return redirect("login")->with('error', $error);
            }
        } else {
            $error = "Usuario o contraseña incorrectos";
            return redirect("login")->with('error', $error);
        }
    }
    public function actionLogin01(Request $request){
        $request->validate([
            'txtUser' => 'required',
            'txtPassword' => 'required',
        ]);
        $error = 'hola';
        $usuario = $request->input('txtUser');
        $contrasena = $request->input('txtPassword');
        
        
        $user = TUser::where('email', $usuario)->first();
        if ($user) {
            $pass=TUser::where('email', $usuario)->where('password', $contrasena)->first();
            // Verificar las credenciales del usuario
            if ($pass){
                // Si las credenciales son correctas, obtener el ID del usuario
                $idUser = $user->person->idUser;

                // Obtener el rol del usuario
                $role = $user->role;

                // Guardar el nombre y apellido del usuario en la sesión
                Session::put('firstName', $user->person->firstName);
                Session::put('surName', $user->person->surName);

                // Redirigir según el rol del usuario
                switch ($role) {
                    case 'teacher':
                        return redirect()->route('teacher')->with('idUser', $idUser);
                    case 'admin':
                        return redirect()->route('admin')->with('idUser', $idUser);
                    case 'student':
                        return redirect()->route('student')->with('idUser', $idUser);
                    default:
                        break;
                }
            } else {
                $error = "La contraseña proporcionada es incorrecta";
            }
        } else {
            $error = "No se encontró ninguna cuenta asociada a este correo electrónico. Por favor, verifique sus credenciales.";
        }

        Session::flash('error', $error);
        return redirect('login');
    }
    */
}
?>