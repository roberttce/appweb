@extends('template.layaut')
@section('sectionGeneral','Ver cursos')
@section('userName')
{{ session('firstName') }} {{ session('surName') }}
@endsection
@section('css')
  <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.bootstrap5.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('viewsresources/admin/getall.css') }}">  
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
    <p>ver matriculas</p>
  </a>		
</li>
@endsection
@section('content')
<div id="page-content">
  <div class="row">
      <div class="col-md-12">
          <div class="widget">
              <div class="widget-extra themed-background-dark">
                  <div>
                      <h3 class="widget-content-light">
                          Relacion de Cursos
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
                  <div class="div_table_user"></div>
              </div>
          </div>
      </div>							
  </div>
</div>
<table id="course" class="table table-striped">
  <thead>
      <tr>
          <th>Nombre</th>
          <th>Codigo</th>
          <th>Categoria</th>
          <th>Requisitos</th>
          <th>Descripcion</th>
          <th>Modalidad</th>
          <th>Acciones</th>
      </tr>
  </thead>
  <tbody>
      @foreach($listTCourse as $index => $value)
          <tr>
              <td>{{$value->name}}</td>
              <td>{{$value->code}}</td>
              <td>{{$value->category}}</td>
              <td>{{$value->requisites}}</td>
              <td>{{$value->description}}</td>  
              <td>{{$value->modality}}</td>
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
                      <button type="button" onclick="deleteCourse('{{ $value->idCourse }}');" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Eliminar">
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
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="{{asset('viewsresources/admin/course/course.js')}}"></script>
@endsection