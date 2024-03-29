@extends('template.home')
@section('plugins')
    <style>
        .log-btn {
            display: none;
        }
        .nav-link{
            display: none;
        }
    </style>
@endsection
@section('content')
    <div class="student-container">
        <div class="sidebar">
            <ul class="sidebar-menu">
                <li class="sidebar-item active"><a href="#">Historial</a></li>
                <li class="sidebar-item"><a href="#">Reglamentos</a></li>
                <li class="sidebar-item"><a href="#">Materiales</a></li>
                <li class="sidebar-item"><a href="#">Profesores</a></li>
            </ul>
        </div>
        <div class="main-content">
            <div class="content-header">
                <h2>Historial</h2>
            </div>
            <div class="content-body">
                <!-- Contenido del historial -->
            </div>
        </div>
    </div>
@endsection

@section('css')
    @parent
    <style>
         .student-container {
            display: flex;
            flex-direction: row;
            height: calc(100vh - 60px); /* Ajusta el valor según la altura de tu navbar */
        }

        .sidebar {
            background-color: #003366; /* Color más suave */
            color: #fff;
            width: 200px;
            padding: 20px;
        }

        .sidebar-menu {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar-item {
            margin-bottom: 10px;
            border-radius: 8px; /* Bordes redondeados */
        }

        .sidebar-item a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s ease;
            display: block; /* Hacer todo el área del enlace clickeable */
            padding: 10px; /* Espaciado interno para mejorar la accesibilidad */
        }

        .sidebar-item.active a,
        .sidebar-item a:hover {
            color: #ffbf00;
            background-color: #001f3f; /* Color de fondo más oscuro */
            border-radius: 8px; /* Bordes redondeados */
        }

        .main-content {
            flex: 1;
            padding: 20px;
        }

        .content-header {
            margin-bottom: 20px;
        }
    </style>
@endsection