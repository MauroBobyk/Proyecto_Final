@extends('historia.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">Carga de historia</h2>
        </div>
       
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
        <a class="btn btn-success " href="{{ route('historia.create') }}"> Agregar historia</a>
    </div> 
    <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
        <a class="btn btn-success " href="{{ route('historia.show',$historia->dni) }}"> Consultar historia</a>
    </div> 

    <div>  <a href="{{route('InicioPaciente')}}"> <button type="button" class="btn btn-primary" style="margin-top: 1rem" >Volver</button></a></div>
@endsection
