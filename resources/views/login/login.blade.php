<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>

    <!-- Agregar la referencia a Bootstrap (puedes utilizar un CDN o descargarlo) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('viewsresources/login/login.css')}}">
    
</head>
<body>
    <div>
        <form id="frmLogin" class="mt-5" action="{{url('login/login') }}" method="post">
            @csrf
            <div class="container">
                <div class="row align-items-center">
                    <div class="row">
                        <div class="col-3">
                            <img src="{{ asset('plugins/adminlte/dist/img/sis/logo-01.png') }}" alt="Logo" style="width: 60px; height: auto;">
                        </div>
                        <div class="col-9">
                            <h2 class="mb-4">Iniciar Sesión</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="txtEmail" class="form-label">Usuario:</label>
                <input type="text" class="form-control @error('txtUser') border-danger @enderror" id="txtUser" name="txtUser" value="{{ old('txtUser') }}">
                @error('txtUser')
                    <span class="text-left text-danger small">Ingrese su correo</span>  
                @enderror
            </div>                
            <div class="mb-3">
                <label for="txtPassword" class="form-label">Contraseña:</label>
                <input type="password" class="form-control @error('txtPassword') border-danger @enderror" id="txtPassword" name="txtPassword" value="{{ old('txtPassword') }}" >
                @error('txtPassword')
                    <span class="text-left text-danger small">Ingrese la contraseña</span>  
                @enderror
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
            </div>
                <div>
                    @if(Session::has('error'))
                    <div class="alert alert-danger">
                        {{ Session::get('error') }}
                    </div>
                @endif  
            </div>
        </form>
    </div>
    <!-- Se asume que jQuery está incluido antes de estos scripts -->
    <script src="{{ asset('plugins/formvalidation/formValidation.min.js') }}"></script>
    <script src="{{ asset('plugins/formvalidation/bootstrap.validation.min.js') }}"></script>

    <!-- Bootstrap se está cargando desde CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Asumiendo que login.js es tu script personalizado para la validación del formulario -->
    <script src="{{ asset('viewresources/login/login.js') }}"></script>
</body>

</html>
