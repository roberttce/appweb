@extends('template.home')
@section('plugins')
    <style>
        .log-btn {
            display: none;
        }
    </style>
@endsection
@section('content')
    <div class="student-container">
        <div class="sidebar">
            <ul class="sidebar-menu">
                <li class="sidebar-item"><a href="{{ url('home/student/history')}}">Historial</a></li>   
                <li class="sidebar-item"><a href="{{ url('home/student/rules') }}">Reglamentos</a></li>
                <li class="sidebar-item active"><a href="{{ url('home/student/material') }}">Materiales</a></li>
                <li class="sidebar-item"><a href="{{ url('home/student/teacher') }}">Profesores</a></li>
            </ul>
        </div>
        <div class="main-content">
            <div class="content-head">
                <h2>Historial</h2>
            </div>
            <div class="content-body">
                historial<!-- Contenido del historial -->
            </div>
        </div>        
    </div>
@endsection

@section('css')
    @parent
     <link rel="stylesheet" href="{{ asset('viewsresources/student/history.css') }}">
@endsection