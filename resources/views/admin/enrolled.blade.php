@extends('template.layaut')
@section('sectionGeneral','Ver Matriculas')
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
    <p>ver matriculas</p>
  </a>		
</li>
@endsection
@section('content')
welcome
@endsection