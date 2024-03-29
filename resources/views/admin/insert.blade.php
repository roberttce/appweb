@extends("template.layaut")
@section('sectionGeneral','insertar')
@section('userName')
{{ session('firstName') }} {{ session('surName') }}
@endsection
@section('css')

@endsection
@section("dashboard")
<li class="nav-item">
  <a href="{{('viewsresources/admin/insert.css')}}" class="nav-link active">
    <i class="far fa-circle nav-icon"></i>
    <p>ver Usuarios</p>
  </a>		
</li>
@endsection
@section('userName')
{{ session('firstName') }} {{ session('surName') }}
@endsection
@section("sectionGeneral","administrador")
@section("content")
  

  <div class="message" style="display: none;"> <p>¡Su matrícula se ha enviado exitosamente!</p>
  </div>

  <script>
    const created_atInput = document.getElementById('created_at');
    const now = new Date();
    created_atInput.value = now.toISOString().slice(0, -1);
  </script>
@endsection