@extends('layout')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
	<main class="container align-center p-5">
		<form method="POST" action="{{route('inicia-sesion')}}">
			@csrf
		  <div class="mb-3">
		    <label for="name" class="form-label">Nombre</label>
		    <input type="text" class="form-control" id="name" name="name" required>
		  </div>
		  <div class="mb-3">
		    <label for="passwordInput" class="form-label">Password</label>
		    <input type="password" class="form-control" id="passwordInput" name="password" required>
		  </div>
		  <div class="mb-3 form-check">
		    <input type="checkbox" class="form-check-input" id="rememberCheck" name="remember">
		    <label class="form-check-label" for="rememberCheck">Mantener sesión iniciada</label>
		  </div>
		  <button type="submit" class="btn btn-primary">Ingresar</button>
		</form>
	</main>
</body>
</html>
@endsection