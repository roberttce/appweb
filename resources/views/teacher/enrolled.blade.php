@extends("template.layaut")
@section('sectionGeneral','Contenido de Estudiantes')
@section('css')
  <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.bootstrap5.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
@endsection
@section('userName')
{{ session('firstName') }} {{ session('surName') }}
@endsection
@section("dashboard")
<li class="nav-item">
  <a href="{{url('teacher/course')}}" class="nav-link active">
    <i class="far fa-circle nav-icon"></i>
    <p>Ver Cursos</p>
  </a>			
</li>
<li class="nav-item">
  <p>das1</p>
</li>
<li class="nav-item">
  hola
</li>
@endsection
@section("content")
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#student">Estudiantes</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#attendance">Asistencia</a>
    </li>
  </ul>
  
  <div  class="tab-content">
    <div  class="tab-pane fade show active">
      <div class="table-responsive">
          <table id="student" class="table table-striped">
              <thead  class="thead-light "  >
                  <tr>
                      <th>Nombre y Apellido</th>
                      <th>Acciones</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach($listTPerson as $value)
                  <tr>
                      <td>
                          <div>
                              <img src="{{ $value->avatar }}" class="rounded-circle mr-2" style="width: 30px; height: 30px;">
                              <span>{{ $value->firstName }} {{ $value->surName }}</span>
                          </div>
                      </td>
                      <td class="text-right">
                          <button class="btn btn-sm btn-primary mr-1" data-toggle="tooltip" title="Ver notas">
                              <i class="fas fa-eye"></i> <!-- Icono de ojo -->
                          </button>
                          <button class="btn btn-sm btn-danger" data-toggle="tooltip" title="Suspender">
                              <i class="fas fa-ban"></i> <!-- Icono de prohibido -->
                          </button>
                      </td>                    
                  </tr>
                  @endforeach
              </tbody>
          </table>
      </div>
  </div>  
    <div id="attendance" class="tab-pane fade">
      <!-- Contenido de la sección de asistencia -->
      <h3>Contenido de Asistencia</h3>
      <p>Aquí va el contenido de la sección de asistencia.</p>
    </div>
  </div> 
@endsection
@section('js') 
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.2/js/dataTables.bootstrap5.js"></script>

<!-- Bootstrap JS (incluye tooltips) -->
 <script src="{{asset('viewsresources/teacher/enrelled.js')}}"></script>
@endsection