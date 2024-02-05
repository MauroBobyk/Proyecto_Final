@extends('layout')

@section('content')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!DOCTYPE HTML>
    <html lang="es">
        <head>
            <title> Panel de pacientes </title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
            rel="stylesheet" 
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
            crossorigin="anonymous"/>
        </head>
<div class="d-grid gap-2">
    <h2>¡Bienvenido {{Auth::user()->name}} selecciona una opción!</h2>
  </div>

<div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
    <a href="{{('pacientes')}}" class="btn btn-success" tabindex="-1" role="button" aria-disabled="true">Administrar Pacientes</a>
   
      
</div>

<div>  <a href="{{route('logout')}}"> <button type="button" class="btn btn-danger" style="margin-top: 1rem" >Salir</button></a></div>

</body>
</html>
</div>
@endsection