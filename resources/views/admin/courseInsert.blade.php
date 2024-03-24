@extends('template.layaut')
@section('sectionGeneral','Ver cursos')
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
@section('content')
welcome
@endsection