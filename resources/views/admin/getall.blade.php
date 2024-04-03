@extends("template.layaut")
@section("sectionGeneral","Ver personas")
@section('userName')
{{ session('firstName') }} {{ session('surName') }}
@endsection
@section("dashboard")
<li class="nav-item">
  <a href="{{url('admin/getall')}}" class="nav-link active">
    <i class="far fa-circle nav-icon"></i>
    <p>ver Usuarios</p>
  </a>
  <a href="{{url('admin/course')}}" class="nav-link active">
    <i class="far fa-circle nav-icon"></i>
    <p>ver cursos</p>
  </a>
  <a href="{{url('admin/enrolled')}}" class="nav-link active">
    <i class="far fa-circle nav-icon"></i>
    <p>ver Matriculas</p>
  </a>	
</li>
@endsection
@section('css')
  <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.bootstrap5.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('viewsresources/admin/getall.css') }}">
  <style>
    .error-input {
        border-color: red !important; /* Borde del campo de entrada en rojo */
    }
    .modal-dialog {
            max-width: 500px;
        }

        .modal-body {
            padding: 1rem;
        }

        .form-group {
            margin-bottom: 0.5rem;
        }

        .form-control {
            padding: 0.375rem 0.5rem;
            font-size: 0.9rem;
            border-radius: 0.25rem; /* Añadido para redondear los bordes de los inputs */
        }

        .error-message {
            color: #dc3545;
            font-size: 0.8rem;
        }

        .modal-header {
            background-color: #003366;  
            color: #fff;
        }
</style>
@endsection
@section("content")
<div id="page-content">
    <div class="row">
        <div class="col-md-12">
            <div class="widget">
                <div class="widget-extra themed-background-dark">
                    <div>
                        <h3 class="widget-content-light">
                            Relacion de Usuarios
                        </h3>
                    </div>
                    <div class="widget-options">
                        <div class="btn-group">
                            <a class="btn btn-default" data-toggle="modal" data-target="#personInsert">
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="widget-extra">
                    <div id="loader" class="text-center">
                        <img src="{{asset('viewsresources/img/loader.gif') }}" width="50px">
                    </div>
                    <div class="div_table_user"></div>
                </div>
            </div>
        </div>							
    </div>
</div>
    <div class="row mb-3">
             
            <div class="col-md-3 offset-md-6">
                <div class="input-group">
                    <span class="input-group-text">DNI:</span>
                    <input type="text" id="dni-filter" class="form-control form-control-sm" maxlength="8" placeholder="Ingrese DNI">
                </div>
            </div>
        <div class="col-md-3 text-end">
            <div class="input-group">
                <label for="role-filter" class="input-group-text">Filtrar por Rol:</label>
                <select id="role-filter" class="form-select form-select-sm">
                    <option value="">Todos</option>
                    <option value="admin">Administrador</option>
                    <option value="teacher">Profesor</option>
                    <option value="student">Estudiante</option>
                    <option value="invitado">Invitado</option>
                </select>
            </div>
        </div>
    </div>
    <table id="person" class="table table-striped">
        <thead>
            <tr>
                <th>Nombre y Apellido</th>
                <th>DNI</th>
                <th>Edad</th>
                <th>Telefono</th>
                <th>Correo</th>
                <th>Rol</th>
                <th>Fecha de Registro</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($listTPerson as $value)
                <tr>
                    <td>{{$value->firstName}} {{$value->surName}}</td>
                    <td>{{$value->dni}}</td>
                    <td>
                        @php
                        $fechaNacimiento = new DateTime($value->birthDate);
                        $fechaActual = new DateTime();
                        $edad = $fechaActual->diff($fechaNacimiento)->y;
                        @endphp
                        {{ $edad }}</td>
                    <td>{{$value->phone}}</td>  
                    <td>{{$value->email}}</td>
                    <td>{{$value->role}}</td>
                    <td>{{$value->created_at->format('d/m/Y')}}</td>
                    <td class="text-right" >
                        <div class="btn-group" role="group">
                            <button type="button" data-toggle="modal" data-target="#personModal" class="btn btn-sm btn-primary mr-1" data-toggle="tooltip" title="Ver Usuario">
                                <i class="fas fa-eye"></i>
                            </button> 
                            <button type="button" class="btn btn-sm btn-warning mr-1" data-toggle="tooltip" title="Desactivar Usuario">
                                <i class="fas fa-ban"></i>
                            </button>
                            <button type="button" data-toggle="modal" data-target="#modal-personUpdate-{{ $value->idPerson }}" class="btn btn-sm btn-success mr-1" data-toggle="tooltip" title="Actualizar Usuario">
                                <i class="fas fa-sync-alt"></i>
                            </button>                            
                            <button type="button" onclick="deletePerson('{{ $value->idPerson }}');" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Eliminar">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </div>
                    </td>
                </tr>

                <!-- Modal para actualizar persona -->
                <div class="modal fade" id="modal-personUpdate-{{ $value->idPerson }}" tabindex="-1" role="dialog" aria-labelledby="modal-personUpdateLabel-{{ $value->idPerson }}" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modal-personUpdateLabel-{{ $value->idPerson }}">Editar Persona</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- Formulario para editar persona -->
                                <form id="form-personUpdate" action="{{ url('admin/person/update/'.$value->idPerson) }}" method="POST">
                                    @csrf
                                    <input type="hidden" id="idPerson" name="idPerson" value="{{ $value->idPerson }}">
                                    <div class="form-group">
                                        <label for="firstName">Nombre</label>
                                        <input type="text" class="form-control" id="firstName" name="firstName" value="{{ $value->firstName }}" required>
                                        <span class="error-message" id="firstName-error"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="surName">Apellido</label>
                                        <input type="text" class="form-control" id="surName" name="surName" value="{{ $value->surName }}" required>
                                        <span class="error-message" id="surName-error"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="dni">DNI</label>
                                        <input type="text" class="form-control" id="dni" name="dni" maxlength="8" value="{{ $value->dni }}" required>
                                        <span class="error-message" id="dni-error"></span>
                                    </div>
                                     
                                    
                                    <div class="form-group">
                                        <label for="phone">Teléfono</label>
                                        <input type="text" class="form-control" id="phone" name="phone" value="{{ $value->phone }}" required>
                                        <span class="error-message" id="phone-error"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Correo Electrónico</label>
                                        <input type="email" class="form-control" id="email" name="email" value="{{ $value->email }}" required>
                                        <span class="error-message" id="email-error"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="role">Rol</label>
                                        <select class="form-control" id="role" name="role" required>
                                            <option value="admin" {{ $value->role == 'admin' ? 'selected' : '' }}>Administrador</option>
                                            <option value="teacher" {{ $value->role == 'teacher' ? 'selected' : '' }}>Profesor</option>
                                            <option value="student" {{ $value->role == 'student' ? 'selected' : '' }}>Estudiante</option>
                                            <option value="invitado" {{ $value->role == 'invitado' ? 'selected' : '' }}>Invitado</option>
                                        </select>
                                        <span class="error-message" id="role-error"></span>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                <button type="button" onclick="personUpdate();" class="btn btn-primary">Guardar Cambios</button>
                            </div>
                        </div>
                    </div>
                </div>
                 
            @endforeach
        </tbody>
    </table>
    @include('admin.modal')
@endsection
@section('js') 

<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.2/js/dataTables.bootstrap5.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js" defer></script>
<script src="{{asset('viewsresources/admin/getall.js')}}"></script>
<script src="{{asset('viewsresources/admin/person.js')}}"></script>
@endsection