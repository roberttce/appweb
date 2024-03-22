@extends('template.layaut')
@section('sectionGeneral','Ver cursos')
@section("dashboard_1")
<a href="{{url('admin/getall')}}" class="nav-link active">
  <i class="far fa-circle nav-icon"></i>
  <p>Ver Usuarios</p>
</a>
@endsection
@section('content')
welcome
@endsection