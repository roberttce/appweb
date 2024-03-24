@extends("template.layaut")
@section('sectionGeneral','ver Personas')
@section('userName')
{{ session('firstName') }} {{ session('surName') }}
@endsection
@section('sectionGeneral','ver usuario')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        Información del Usuario
                    </div>
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <img src="https://via.placeholder.com/150" alt="Foto de Perfil" class="img-fluid rounded-circle">
                        </div>
                        <h5 class="card-title">Nombre: Juan Pérez</h5>
                        <p class="card-text">Correo Electrónico: juan@example.com</p>
                        <p class="card-text">Rol: Estudiante</p>
                        <p class="card-text">Historial Académico:</p>
                        <button class="btn btn-sm btn-primary">Ver Historial Completo</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection