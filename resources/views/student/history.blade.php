@extends('template.home')
@section('plugins')
    <style>
        .log-btn {
            display: none;
        }
        .table-container {
    overflow-x: auto;
}

table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    border: 1px solid #000; /* Borde negro para las celdas */
    padding: 8px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

ul {
    padding: 0;
    margin: 0;
}

ul li {
    list-style-type: none;
    margin-bottom: 5px;
}

.popup {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #ffffff;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.5);
}

.popup-content {
    text-align: center;
}

.close {
    position: absolute;
    top: 10px;
    right: 10px;
    cursor: pointer;
}

    </style>
@endsection
@section('content')
    <div class="student-container">
        <div class="sidebar">
            <ul class="sidebar-menu">
                <li class="sidebar-item active"><a href="#">Historial</a></li>
                <li class="sidebar-item"><a href="#">Reglamentos</a></li>
                <li class="sidebar-item"><a href="#">Materiales</a></li>
                <li class="sidebar-item">
                    <a href="#">Opciones</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Cerrar cuenta</a></li>
                    </ul>
                </li>               
            </ul>
        </div>
        
        <div class="main-content">
            <div class="content-head">
                <h2>Historial</h2>
            </div>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Curso</th>
                            <th>Competencias</th>
                            <th>Periodo 1</th>
                            <th>Periodo 2</th>
                            <th>Periodo 3</th>
                            <th>Promedio Final</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($studentHistory as $courseInfo)
                            @php
                                $competenceCount = count($courseInfo['competences']);
                                $grades = $courseInfo['grades'];
                            @endphp
                            @for($i = 0; $i < $competenceCount; $i++)
                                <tr>
                                    @if($i === 0)
                                        <td rowspan="{{ $competenceCount }}">{{ $courseInfo['course_name'] }}</td>
                                    @endif
                                    <td>{{ $courseInfo['competences'][$i]->name }}</td>
                                    @for($j = 1; $j <= 3; $j++)
                                        <td>
                                            @if(isset($grades[$courseInfo['competences'][$i]->idCompetence][$j]))
                                                {{ $grades[$courseInfo['competences'][$i]->idCompetence][$j] }}
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                    @endfor
                                    <td>{{ $courseInfo['average'] }}</td>
                                </tr>
                            @endfor
                        @endforeach
                    </tbody>
                </table>
            </div>
            
        </div>        
    </div>
@endsection

@section('css')
    <script>
        function togglePopup() {
            var popup = document.getElementById("popup");
            if (popup.style.display === "none") {
                popup.style.display = "block";
            } else {
                popup.style.display = "none";
            }
        }
    </script>
    @parent
     <link rel="stylesheet" href="{{ asset('viewsresources/student/history.css') }}">
@endsection