<?php
namespace App\Http\Controllers;
use App\Models\TUser;
use Illuminate\Http\Request;
class LayautController  extends Controller{
     
    public function index(){   
        return view("template/layaut");
    }
}
?>