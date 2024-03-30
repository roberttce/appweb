<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class StudentController extends Controller
{
    public function actionHistory(Request $request){
        $dni = $request->input('dni');
        return redirect('home/student/history');
    }
}
