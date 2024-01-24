@extends('historia.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">Consultar Historia</h2>
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

    <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
        <a class="btn btn-primary" href="{{ route('PanelHistoria') }}"> Volver</a>
    </div>
@endsection
