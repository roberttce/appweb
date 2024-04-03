<?php

namespace App\Http\Controllers;

use App\Models\TPerson;
use App\Models\TEnrolled;
use App\Models\TCourse;
use App\Models\TCompetence;
use App\Models\TRating;
use Illuminate\Http\Request;
use Illuminate\Session\SessionManager;

class StudentController extends Controller
{
    /*public function actionHistory(Request $request,SessionManager $sessionManager){
        $listMessage=[];
        $request->validate([
            'dni' => 'required|numeric|digits:8',
        ], [
            'dni.required' => 'El campo DNI es obligatorio.',
            'dni.numeric' => 'El campo DNI debe ser un número.',
            'dni.digits' => 'El campo DNI debe tener exactamente 8 dígitos.',
        ]);        
        $user = TPerson::where('dni', $request->input('dni'))->first();
        if ($user) {
            $role = $user->role;
            
            if ($role=="student") {
                $studentHistory = $this->getStudentHistory($user->id); // Método para obtener el historial del estudiante

            // Aquí debes definir el método getStudentHistory() que recupera los datos necesarios para el historial
            $courses = [];
            foreach ($studentHistory as $history) {
                $course = TCourse::find($history->idCourse);
                $competences = TCompetence::where('idCourse', $history->idCourse)->get();
                $courseData = [
                    'course_name' => $course->name,
                    'competences' => $competences,
                    'grade' => $history->grade,
                    'average' => $history->average,
                ];
                $courses[] = $courseData;
            }

            return view('student.history')->with('courses', $courses);
            } else {
                $listMessage[]="El DNI  pertenece a un estudiante";

                if(count($listMessage) > 0) {
                    $sessionManager->flash('listMessage', $listMessage);
                    $sessionManager->flash('typeMessage', 'error');
                    return redirect('home/student');
                }
            }
        } else {
            $listMessage[]="No existe ningun Usuario asociado al Sistema";

            if(count($listMessage) > 0) {
                $sessionManager->flash('listMessage', $listMessage);
                $sessionManager->flash('typeMessage', 'error');
                return redirect('home/student');
            }
        }
    }*/
    public function viewHistory(){

    }
    public function actionHistory(Request $request, SessionManager $sessionManager)
    {
        $listMessage = [];

        $request->validate([
            'dni' => 'required|numeric|digits:8',
        ], [
            'dni.required' => 'El campo DNI es obligatorio.',
            'dni.numeric' => 'El campo DNI debe ser un número.',
            'dni.digits' => 'El campo DNI debe tener exactamente 8 dígitos.',
        ]);

        $user = TPerson::where('dni', $request->input('dni'))->first();

        if ($user) {
            $role = $user->role;

            if ($role == "student") {
                // Recuperar el historial del estudiante
                $studentHistory = $this->getStudentHistory($user->idPerson);
                
                // Enviar el historial a la vista
                return view('student.history', ['studentHistory' => $studentHistory]);
            } else {
                $listMessage[] = "El DNI pertenece a un estudiante";

                if (count($listMessage) > 0) {
                    $sessionManager->flash('listMessage', $listMessage);
                    $sessionManager->flash('typeMessage', 'error');
                    return redirect('home/student');
                }
            }
        } else {
            $listMessage[] = "No existe ningún Usuario asociado al Sistema";

            if (count($listMessage) > 0) {
                $sessionManager->flash('listMessage', $listMessage);
                $sessionManager->flash('typeMessage', 'error');
                return redirect('home/student');
            }
        }
    }
    private function getStudentHistory($studentId){
    $enrolledCourses = TEnrolled::where('idPerson', $studentId)->get();
    $studentHistory = [];

    foreach ($enrolledCourses as $enrolledCourse) {
        $course = TCourse::find($enrolledCourse->idCourse);
        $competences = TCompetence::where('idCourse', $course->idCourse)->get();
        $ratings = TRating::where('idEnrolled', $enrolledCourse->idEnrolled)->get();

        // Agrupar las notas por competencia y periodo
        $grades = [];
        foreach ($ratings as $rating) {
            $grades[$rating->idCompetence][$rating->period] = $rating->note;
        }

        $courseInfo = [
            'course_name' => $course->name,
            'average' => $enrolledCourse->grade, // Aquí debes calcular el promedio final del curso
            'competences' => $competences,
            'grades' => $grades,
        ];

        $studentHistory[] = $courseInfo;
    }

    return $studentHistory;
}

}