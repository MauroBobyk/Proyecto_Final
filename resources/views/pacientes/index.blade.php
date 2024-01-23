@extends('pacientes.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12">
        
            <h2 class="text-center">Carga de pacientes</h2>
        </div>
        <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
            <a class="btn btn-success " href="{{ route('pacientes.create') }}"> Agregar Pacientes</a>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

  @if(sizeof($pacientes) > 0)
        <table class="table table-bordered">
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>DNI</th>
                <th>Edad</th>
                <th>Fecha de Nacimiento</th>
                <th width="280px">Acciones</th>
            </tr>
            @foreach ($pacientes as $paciente)
                <tr>
                    <td>{{ $paciente->id }}</td>
                    <td>{{ $paciente->name }}</td>
                    <td>{{ $paciente->dni }}</td>
                    <td>{{ $paciente->edad }}</td>
                    <td>{{ $paciente->fecha_nac }}</td>
                    <td>
                        <form action="{{ route('pacientes.destroy',$paciente->id) }}" method="POST">

                            <a class="btn btn-info" href="{{ route('pacientes.show',$paciente->id) }}">Ver</a>
                            <a class="btn btn-primary" href="{{ route('pacientes.edit',$paciente->id) }}">Modificar</a>

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
    {!! $pacientes->links() !!}
    <div>  <a href="{{route('InicioPaciente')}}"> <button type="button" class="btn btn-primary" style="margin-top: 1rem" >Volver</button></a></div> 
@endsection
