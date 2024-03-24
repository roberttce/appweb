<?php
namespace App\Http\Controllers;
use App\Models\TUser;
use App\Models\TPerson;
use Illuminate\Http\Request;
use Illuminate\Session\SessionManager;
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
    public function actionDelete($idPerson, SessionManager $sessionManager)
	{
		$tPerson = TPerson::find($idPerson);
		
		if($tPerson != null)
		{
			$tPerson->delete();
		}

		$sessionManager->flash('listMessage', ['Registro eliminado correctamente.']);
		$sessionManager->flash('typeMessage', 'success');

		return redirect('admin/getall');
	}
    public function viewPerson(Request $request){
        return view('admin.viewPerson');
    }
}
?>