@extends('layout')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">Agregar Medicos
            </h2>
        </div>
        <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
            <a class="btn btn-primary" href="{{ route('medicos.index') }}"> Volver</a>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Oops!</strong> Hay algun problema en los datos ingresados.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('medicos.store') }}" method="POST">
        @csrf
    
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre y Apellido:</strong>
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre y Apellido">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Matricula:</strong>
                    <input type="text" class="form-control" name="matricula" placeholder="Matricula">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Fecha de Ingreso:</strong>
                    <input type="date" name="fecha_ingreso" class="form-control" placeholder="Fecha de ingreso">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <strong>Especialidad:</strong>
                <select name="especialidad" id="especialidad" class="form-control" >
                    @foreach($especialidades as $clave => $especialidad)
                        <option value="{{ $clave }}">{{ $especialidad }}</option>
                    @endforeach
                </select>
            </div> 
    
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <br>
                <button type="submit" class="btn btn-primary">Aceptar</button>
    <br>
                <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
                    <a class="btn btn-secondary" href="{{ route('medicos.index') }}"> Volver</a>
                </div>
            </div>
        </div>
    
    </form>
   
@endsection
