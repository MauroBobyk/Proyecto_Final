@extends('administrador.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">Agregar Producto</h2>
        </div>
        <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
            <a class="btn btn-primary" href="{{ route('administrador.index') }}"> Volver</a>
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

   
        <form method="POST" action="{{route('validar-registro')}}">
			@csrf
			<div class="mb-3">
				<label for="userInput" class="form-label">Nombre</label>
				<input type="text" class="form-control" id="userInput" name="name" required autocomplete="disable">
			  </div>
		  <div class="mb-3">
		    <label for="passwordInput" class="form-label">Password</label>
		    <input type="password" class="form-control" id="passwordInput" name="password" required>
		  </div>
		 
		  <button type="submit" class="btn btn-primary">Registrarse</button>
		</form>
@endsection
