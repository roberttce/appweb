<?php
namespace App\Http\Controllers;
use App\Models\TCourse;
use App\Models\Tenrolled;
use App\Models\TPerson;
class TeacherController  extends Controller{
     
    public function index(){   
        return view("teacher.teacher");
    }
    public function viewCouse(){
        $listTCourse=TCourse::all();
        return view("teacher.course",[
			'listTCourse' => $listTCourse
		]);
    }
    public function viewEnrolled($idCourse) {
        $enrolledRecord = TEnrolled::where('idCourse', $idCourse)->get();
        $enrolledId = [];
        foreach ($enrolledRecord as $enrolled) {
            $enrolledId[] = $enrolled->idPerson;
        }
        $listTPerson = TPerson::whereIn('idPerson', $enrolledId)->get();
        
        return view('teacher/enrolled',
		[
			'listTPerson' => $listTPerson
		]);
    }
    
}
?>