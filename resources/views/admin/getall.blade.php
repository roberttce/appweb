@extends("template.layaut")
@section("sectionGeneral","Ver personas")
@section('css')
  <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.bootstrap5.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
@endsection
@section("dashboard_1")
    <a href="{{url('admin/getall')}}" class="nav-link active">
        <i class="far fa-circle nav-icon"></i>
        <p>Ver Usuarios</p>
    </a>
@endsection
@section("content")
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
                    <td>{{$value->phone}}</td>  
                    <td>{{$value->email}}</td>
                    <td>{{$value->role}}</td>
                    <td>{{$value->created_at->format('d/m/Y')}}</td>
                    <td class="text-right" >
                        <div class="btn-group" role="group">
                            <button type="button" onclick="verUsuario()" class="btn btn-sm btn-primary mr-1" data-toggle="tooltip" title="ver Usruario">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="btn btn-sm btn-danger mr-1" data-toggle="tooltip" title="Suspender">
                                <i class="fas fa-ban"></i>
                            </button>
                            <button class="btn btn-sm btn-warning mr-1" data-toggle="tooltip" title="Actualizar">
                                <i class="fas fa-sync-alt"></i>
                            </button>
                            <button class="btn btn-sm btn-danger" data-toggle="tooltip" title="Eliminar">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
@section('js') 
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.2/js/dataTables.bootstrap5.js"></script>
<script src="{{asset('viewsresources/admin/getall.js')}}"></script>
@endsection
