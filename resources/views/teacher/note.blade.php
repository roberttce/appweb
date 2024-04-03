@extends('template.layaut')
@section('css')
<style>
    .content-head {
    background-color: #003366; /* Azul marino */
    color: #fff; /* Texto blanco */
    padding: 12px;
    text-align: center; /* Para centrar el texto */
    border-radius:5px;
    }
    .main-content {
        padding: 20px;
    }

    .table-container {
        overflow-x: auto;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
    }

    input[type="text"] {
        width: 100%;
        padding: 5px;
        box-sizing: border-box;
    }

</style>
@endsection
@section("dashboard")
    <li class="nav-item">
    <a href="{{url('teacher/course')}}" class="nav-link active">
        <i class="far fa-circle nav-icon"></i>
        <p>Ver Cursos</p>
    </a>			
@endsection
@section('content')
<div class="main-content">
    <h2>Registro de notas</h2>
    <div class="table-container">
        <h1>{{ $courseName }}</h1> <!-- Mostrar el identificador único del curso -->
        <form method="POST" action="{{ url('teacher/course/student/note') }}">
            @csrf
            <table>
                <thead>
                    <tr>
                        <th>Competencia</th>
                        <th>Periodo 1</th>
                        <th>Periodo 2</th>
                        <th>Periodo 3</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($listTCompetence as $value)
                    <tr>
                        <td>{{ $value->name }}</td>
                        <input type="hidden" name="idCompetence[]" value="{{ $value->idCompetence }}">
                        <input type="hidden" name="idEnrolled" value="{{ $idEnrolled }}">
                        <input type="hidden" name="idPerson" value="{{ $idPerson }}">
                        <input type="hidden" name="idCourse" value="{{ $idCourse }}">
                        <td>
                            <input type="text" name="note1_{{ $value->idCompetence }}" value="{{ isset($notes[$value->idCompetence][1]) ? $notes[$value->idCompetence][1] : '' }}">
                        </td>
                        <td>
                            <input type="text" name="note2_{{ $value->idCompetence }}" value="{{ isset($notes[$value->idCompetence][2]) ? $notes[$value->idCompetence][2] : '' }}">
                        </td>
                        <td>
                            <input type="text" name="note3_{{ $value->idCompetence }}" value="{{ isset($notes[$value->idCompetence][3]) ? $notes[$value->idCompetence][3] : '' }}">
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <button type="submit">Guardar Notas</button>
        </form>
    </div>
</div>

@endsection
@section('js')   
@endsection