@extends('layout')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">Modificar al doctor/a  {{ $medico->nombre }}</h2>
        </div>
        <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
            <a class="btn btn-primary" href="{{ route('medicos.index') }}"> Volver</a>
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

    <form action="{{ route('medicos.update',$medico->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre y Apellido:</strong>
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre y Apellido" value="{{$medico->nombre}}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Matricula:</strong>
                    <input type="text" class="form-control" name="matricula" placeholder="Matricula" value="{{$medico->matricula}}">
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
                <button type="submit" class="btn btn-primary">Aceptar</button>
            </div>
        </div>

    </form>
@endsection
