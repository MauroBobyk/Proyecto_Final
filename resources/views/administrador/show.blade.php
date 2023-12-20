@extends('administrador.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">Ver Producto</h2>
        </div>
        <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
            <a class="btn btn-primary" href="{{ route('administrador.index') }}"> Volver</a>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                {{ $user->name }}
            </div>
        </div>
       
    </div>
@endsection
