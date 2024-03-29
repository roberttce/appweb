@extends('template.home')
@section('title','login')
@section('plugins')
    <style>
        .log-btn {
            display: none;
        }
    </style>
@endsection
@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="{{asset('viewsresources/login/login.css')}}">
@endsection
@section('content')
<div class="login-container">
    <div class="form-container">
        <form id="frmLogin" action="{{ url('login/login') }}" method="post">
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
                <label for="txtUser" class="login-label">Usuario:</label>
                <input type="text" id="txtUser" name="txtUser" class="login-input" value="{{ old('txtUser') }}">
                @error('txtUser')
                    <span class="login-error">Ingrese su correo</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="txtPassword" class="login-label">Contraseña:</label>
                <input type="password" id="txtPassword" name="txtPassword" class="login-input" value="{{ old('txtPassword') }}">
                @error('txtPassword')
                    <span class="login-error">Ingrese la contraseña</span>
                @enderror
            </div>
            <div>
                <button type="submit" class="login-button">Iniciar Sesión</button>
            </div>
            <div>
                @if(Session::has('error'))
                    <div class="login-error">{{ Session::get('error') }}</div>
                @endif
            </div>
        </form>
    </div>
</div>
@endsection
@section('js')
    <script src="{{ asset('plugins/formvalidation/formValidation.min.js') }}"></script>
    <script src="{{ asset('plugins/formvalidation/bootstrap.validation.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('viewresources/login/login.js') }}"></script>
@endsection
