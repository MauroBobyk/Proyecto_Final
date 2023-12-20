@extends('pacientes.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">Modificar Producto</h2>
        </div>
        <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
            <a class="btn btn-primary" href="{{ route('pacientes.index') }}"> Volver</a>
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
                    <strong>Nombre:</strong>
                    <input type="text" name="name" value="{{ $paciente->name }}" class="form-control" placeholder="Nombre">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>dni:</strong>
                    <textarea class="form-control" style="height:150px" name="dni" placeholder="Detalles">{{ $paciente->dni }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>edad:</strong>
                    <input type="number" name="edad" value="{{ $paciente->edad }}" class="form-control" >
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Aceptar</button>
            </div>
        </div>

    </form>
@endsection
