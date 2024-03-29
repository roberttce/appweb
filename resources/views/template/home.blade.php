<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @yield('css')
    @yield('plugins')
    <link rel="stylesheet" href="{{ asset('viewsresources/home/home.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div>
        <nav>
            <div class="containers">
                <div class="right-content">
                    <div class="logo">
                        <img src="{{ asset('viewsresources/img/logo.png') }}" alt="Logo">
                    </div>
                    <div class="school-names">
                        <span class="school-name" style="font-size: 0.7rem;">I.E PARROQUIAL</span>
                        <span class="school-name"><span>SAN GABRIEL</span></span>
                    </div>
                </div>
                <ul class="nav-links">
                    <li><a href="{{ url('/') }}" class="nav-link">Home</a></li>
                    <li><a href="#" class="nav-link">Noticias</a></li>
                    <li><a href="{{ url('student')}}" class="nav-link">Portal del Estudiante</a></li>
                </ul>
                <a href="{{ url('login') }}" class="log-btn" style="text-decoration:none;">Iniciar Sesión</a>
            </div>
        </nav>
    </div>
    <div>
        @yield('content')
    </div>
    @yield('jss')
    <footer class="main-footer">
        <strong>Copyright &copy; 2024- <a href="#">Colegio San Gabriel</a>.</strong>
        <div class="float-right d-none d-sm-inline-block">
            <b>Version:</b> 1.0.1.-pre
        </div>
    </footer>
</body>
</html>