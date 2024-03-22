<?php
namespace App\Http\Controllers;
use App\Models\TUser;
class UserController extends Controller{
    public function index(){
         return view("login/login");
    }
    public function actionGetAll(){
        $listTUser = TUser::all();

		return view('user/getall',
		[
			'listTUser' => $listTUser
		]);
         
    }
}
?>