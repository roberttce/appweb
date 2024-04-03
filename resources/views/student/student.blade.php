@extends('template.home')
@section('css')
<link rel="stylesheet" href="{{ asset('viewsresources/student/student.css') }}">
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header" style="background-color: #003366; color: #fff;">Consultar información del estudiante</div>

                <div class="card-body">
                    <form action="{{ url('home/student/view') }}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="dni" class="col-md-4 col-form-label text-md-right">DNI del estudiante</label>
                            <div class="col-md-8">
                                <input id="dni" type="text" class="form-control @error('dni') is-invalid @enderror" name="dni" >

                                @error('dni')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Consultar información
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="height: 300px;"></div>
@endsection
<script src="{{asset('plugins/pnotify/pnotify.custom.min.js')}}"></script>
<script>
    @if(Session::has('listMessage'))
        @foreach(Session::get('listMessage') as $value)
            new PNotify(
            {
                title : '{{Session::get('typeMessage') == 'error' ? 'No se pudo proceder!' : 'Correcto!'}}',
                text : '{{$value}}',
                type : '{{Session::get('typeMessage')}}'
            });
        @endforeach
    @endif
</script>