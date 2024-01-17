@extends('medicos.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">Carga de Medicos</h2>
        </div>
        <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
            <a class="btn btn-success " href="{{ route('medicos.create') }}"> Agregar Medicos</a>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

  @if(sizeof($medicos) > 0)
        <table class="table table-bordered">
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Matricula</th>
                <th>Especialidad</th>
                <th>Fecha de Ingreso</th>
                <th width="280px">Acciones</th>
            </tr>
            @foreach ($medicos as $medico)
                <tr>
                    <td>{{ $medico->id }}</td>
                    <td>{{ $medico->nombre }}</td>
                    <td>{{ $medico->matricula }}</td>
                    <td>{{ $medico->especialidad }}</td>
                    <td>{{ $medico->fecha_ingreso }}</td>
                    <td>
                        <form action="{{ route('medicos.destroy',$medico->id) }}" method="POST">

                            <a class="btn btn-info" href="{{ route('medicos.show',$medico->id) }}">Ver</a>
                            <a class="btn btn-primary" href="{{ route('medicos.edit',$medico->id) }}">Modificar</a>

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

    {!! $medicos->links() !!}
    <div>  <a href="{{route('InicioAdmin')}}"> <button type="button" class="btn btn-primary" style="margin-top: 1rem" >Volver</button></a></div>
@endsection
