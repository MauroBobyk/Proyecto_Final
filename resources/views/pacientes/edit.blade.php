@extends('layout')

@section('content')

    <div class="row">
        <title> Modificacion de pacientes </title>
        <div class="col-lg-12">
            <h2 class="text-center">Modificar al Paciente {{ $paciente->name }}</h2>
        </div>
       
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Hay algun problema en los datos ingresados.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('pacientes.update',$paciente->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre y Apellido:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Nombre y Apellido">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Edad:</strong>
                    <input type="text" name="edad" class="form-control" placeholder="Edad">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Fecha de Nacimiento:</strong>
                    <input type="date" name="fecha_nac" class="form-control" placeholder="Fecha de nacimiento">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <br>
                <button type="submit" class="btn btn-primary">Aceptar</button>
                <br>
                <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
                    <a class="btn btn-secondary" href="{{ route('pacientes.index') }}"> Volver</a>
                </div>
            </div>
        </div>

    </form>
@endsection
