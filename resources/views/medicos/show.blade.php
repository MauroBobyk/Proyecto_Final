@extends('layout')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">Medico número {{ $medico->id }}</h2>
        </div>
        <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
            <a class="btn btn-primary" href="{{ route('medicos.index') }}"> Volver</a>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                {{ $medico->nombre }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Matricula:</strong>
                {{ $medico->matricula }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Especialidad:</strong>
                 {{ $medico->especialidad }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fecha de ingreso:</strong>
                 {{ $medico->fecha_ingreso }}
            </div>
        </div>
    </div>
@endsection
