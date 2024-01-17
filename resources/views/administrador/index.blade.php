@extends('administrador.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">Carga de Workers</h2>
        </div>
        <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
            <a class="btn btn-success " href="{{ route('administrador.create') }}"> Agregar worker</a>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

  @if(sizeof($users) > 0)
        <table class="table table-bordered">
            <tr>
                <th>id</th>
                <th>Usuario</th>

                <th width="280px">Acciones</th>
            </tr>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>
                        <form action="{{ route('administrador.destroy',$user->id) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    @else
        <div class="alert alert-alert">Comenzar agregando a la Base de Datos.</div>
    @endif

    {!! $users->links() !!}
<div>  <a href="{{route('InicioAdmin')}}"> <button type="button" class="btn btn-primary" style="margin-top: 1rem" >Volver</button></a></div> 
@endsection
