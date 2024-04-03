<?php
namespace App\Http\Controllers;
use App\Models\TCourse;
use App\Models\Tenrolled;
use App\Models\TPerson;
use App\Models\TCompetence;
use App\Models\TRating;
use Illuminate\Http\Request;
use Illuminate\Session\SessionManager;

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
        $course = TCourse::find($idCourse);
    
        if ($course) {
            $enrolledRecord = TEnrolled::where('idCourse', $idCourse)->get();
            $enrolledId = [];
            foreach ($enrolledRecord as $enrolled) {
                $enrolledId[] = $enrolled->idPerson;
            }
            $listTPerson = TPerson::whereIn('idPerson', $enrolledId)->get();
            
            return view('teacher.enrolled', [
                'listTPerson' => $listTPerson,
                'courseName' => $course->name,
                'idCourse' => $idCourse
            ]);
        }
    }
    
    public function viewNote($idCourse, $idPerson) {
        $tenrolled = TEnrolled::where('idPerson', $idPerson)
                               ->where('idCourse', $idCourse)
                               ->first();
        
        $course = TCourse::find($idCourse);
        $courseName = $course ? $course->name : '';
        
        $listTCompetence = TCompetence::where('idCourse', $idCourse)->get();
        $notes = [];
        $idEnrolled = $tenrolled ? $tenrolled->idEnrolled : null;
    
        if ($idEnrolled) {
            $ratings = TRating::where('idEnrolled', $idEnrolled)->get();
    
            foreach ($ratings as $rating) {
                $competence = TCompetence::find($rating->idCompetence);
                if ($competence && $competence->idCourse == $idCourse) {
                    $notes[$rating->idCompetence][$rating->period] = $rating->note;
                }
            }
        }
    
        return view('teacher.note')->with([
            'courseName' => $courseName,
            'idCourse' =>$idCourse,
            'listTCompetence' => $listTCompetence,
            'idEnrolled' => $idEnrolled,
            'notes' => $notes,
            'idPerson' => $idPerson
        ]);
    }
    
    
    
    /*public function viewNote($idPerson, $idCourse) {
        $tenrolled = TEnrolled::where('idPerson', $idPerson)
                               ->where('idCourse', $idCourse)
                               ->first();
        
        $course = TCourse::find($idCourse);
        $courseName = $course ? $course->name : '';
        if ($tenrolled) {
            $idEnrolled = $tenrolled->idEnrolled;
            $listTCompetence = TCompetence::where('idCourse', $idCourse)->get();
            $ratings = TRating::where('idEnrolled', $idEnrolled)->get();
            $notes = [];
    
            foreach ($ratings as $rating) {
                $competence = TCompetence::find($rating->idCompetence);
                if ($competence && $rating->idEnrolled == $idEnrolled && $competence->idCourse == $idCourse) {
                    $notes[$rating->idCompetence][$rating->period] = $rating->note;
                }
            }
    
            return view('teacher.note')->with([
                'listTCompetence' => $listTCompetence,
                'idEnrolled' => $idEnrolled,
                'notes' => $notes,
                'courseName'=>$courseName
            ]);
        } else {
            return view('teacher.note')->with([
                'listTCompetence' => [],
                'idEnrolled' => null,
                'notes' => [],
                'courseName'=>$courseName
            ]);
        }
    }
    
     */
    public function noteInsert(Request $request, SessionManager $sessionManager) {
        $idCompetences = $request->input('idCompetence');
        $idEnrolled = $request->input('idEnrolled');
        $enrolledRecord = TEnrolled::where('idEnrolled', $idEnrolled)->first();
        $idPerson = $request->input('idPerson');
        $idCourse = $request->input('idCourse');
        // Validar los valores de las notas si es necesario
        $validNotes = ['A', 'B', 'C', 'AD'];
    
        foreach ($idCompetences as $key => $idCompetence) {
            $note1Key = 'note1_' . $idCompetence;
            $note2Key = 'note2_' . $idCompetence;
            $note3Key = 'note3_' . $idCompetence;
    
            $note1Value = $request->input($note1Key);
            $note2Value = $request->input($note2Key);
            $note3Value = $request->input($note3Key);
    
            // Verificar si los valores de las notas son válidos
            if (in_array($note1Value, $validNotes)) {
                $rating = new TRating();
                $rating->idRating = uniqid();  // Generar un ID único
                $rating->idCompetence = $idCompetence;
                $rating->idEnrolled = $idEnrolled;
                $rating->note = $note1Value;
                $rating->period = 1;
                $rating->save();
    
                // Establecer mensaje flash de éxito
                $sessionManager->flash('listMessage', ['Nota del periodo 1 registrada correctamente.']);
                $sessionManager->flash('typeMessage', 'success');
            }
    
            if (in_array($note2Value, $validNotes)) {
                $rating = new TRating();
                $rating->idRating = uniqid();  // Generar un ID único
                $rating->idCompetence = $idCompetence;
                $rating->idEnrolled = $idEnrolled;
                $rating->note = $note2Value;
                $rating->period = 2;
                $rating->save();
    
                // Establecer mensaje flash de éxito
                $sessionManager->flash('listMessage', ['Nota del periodo 2 registrada correctamente.']);
                $sessionManager->flash('typeMessage', 'success');
            }
    
            if (in_array($note3Value, $validNotes)) {
                $rating = new TRating();
                $rating->idRating = uniqid();  // Generar un ID único
                $rating->idCompetence = $idCompetence;
                $rating->idEnrolled = $idEnrolled;
                $rating->note = $note3Value;
                $rating->period = 3;
                $rating->save();
    
                // Establecer mensaje flash de éxito
                $sessionManager->flash('listMessage', ['Nota del periodo 3 registrada correctamente.']);
                $sessionManager->flash('typeMessage', 'success');
            }
        }
    
        // Redireccionar a alguna vista después de guardar las notas
        return redirect('teacher/course/enrolled/student/'.$idCourse.'/'. $idPerson);
    }
}
?>