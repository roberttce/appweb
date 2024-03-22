<?php
namespace App\Http\Controllers;
use App\Models\TUser;
use App\Models\TPerson;
use Illuminate\Http\Request;
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
    public function viewPerson(Request $request){
        return view('admin.viewPerson');
    }
}
?>