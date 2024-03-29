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
</li>
@endsection
@section('css')
  <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.bootstrap5.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('viewsresources/admin/getall.css') }}">
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
            @foreach($listTPerson as $index => $value)
                <tr>
                    <td>{{$value->firstName}} {{$value->surName}}</td>
                    <td>{{$value->dni}}</td>
                    <td>{{$value->birthDate}}</td>
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
                            <button type="button" data-toggle="modal" data-target="#modal-personUpdate" class="btn btn-sm btn-success mr-1" data-toggle="tooltip" title="Actualizar Usuario">
                                <i class="fas fa-sync-alt"></i>
                            </button>
                            <button type="button" onclick="deletePerson('{{ $value->idPerson }}');" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Eliminar">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </div>
                    </td>
                </tr>
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
<script src="{{asset('viewsresources/admin/getall.js')}}"></script>
<script src="{{asset('viewsresources/admin/person.js')}}"></script>
@endsection
