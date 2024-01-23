@extends('historia.layout')

@section('content')

    <div class="rdsadsow">
        <div class="col-lg-12">
          dsadsa  <h2 class="text-center">Agregar Una historia clinica</h2>
        </div>
        <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
            <a class="btn btn-primary" href="{{ route('historia.index') }}"> Volver</a>
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

    <form action="{{ route('historial.store') }}" method="POST">
        @csrf

       
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Aceptar</button>
            </div>
        </div>

    </form>
@endsection
