@extends('historia.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">Panel de historias </h2>
        </div>
        <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
            <a class="btn btn-success " href="{{ route('Carga') }}"> Cargar historial</a>
       
        </div>
        <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
<a class="btn btn-info " href="{{ route('Consulta') }}"> Consultar historial</a>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif
    <div>  <a href="{{route('InicioPaciente')}}"> <button type="button" class="btn btn-primary" style="margin-top: 1rem" >Volver</button></a></div>
@endsection
