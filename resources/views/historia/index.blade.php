@extends('historia.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">Cargar Historial Clinico</h2>
        </div>
        <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
            <a class="btn btn-success " href="{{ route('historial.create') }}"> Agregar Historial clinico</a>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

  @if(sizeof($historia) > 0)
        <table class="table table-bordered">
            <tr>
             
            </tr>
            @foreach ($historia as $historial)
                <tr>
                 {{--    <td>{{ $historial->id }}</td>
                    <td>{{ $medico->nombre }}</td>
                    <td>{{ $medico->matricula }}</td>
                    <td>{{ $medico->especialidad }}</td>
                    <td>{{ $medico->fecha_ingreso }}</td>
                    <td> --}}
                        <form action="{{ route('historial.destroy',$historial->id) }}" method="POST">

                            <a class="btn btn-info" href="{{ route('historial.show',$historial->id) }}">Ver</a>
                            <a class="btn btn-primary" href="{{ route('historial.edit',$historial->id) }}">Modificar</a>

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

    {!! $historia->links() !!}
    <div>  <a href="{{route('InicioPaciente')}}"> <button type="button" class="btn btn-primary" style="margin-top: 1rem" >Volver</button></a></div>
@endsection
