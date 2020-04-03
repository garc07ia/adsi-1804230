<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Crear Usuario</title>
</head>
<body>
	<h1>Crear de Usuario</h1>
	<hr>
	<a href="{{ url('users') }}">Ir a Lista de Usuarios</a>
	<hr>
<form action="{{ url('users') }}" method="post">
		@csrf
		<input type="text" name="fullname" value="{{ old('fullname') }}" placeholder="Nombre Completo">
		<br>
		<input type="text" name="email" value="{{ old('email') }}" placeholder="Correo Electrónico">
		<br>
		<input type="text" name="phone" value="{{ old('phone') }}" placeholder="Teléfono">
		<br>
		<input type="date" name="birthdate" value="{{ old('birthdate') }}" placeholder="Fecha de Nacimiento">
		<br>
		<input type="text" name="gender" value="{{old('gender')}}" placeholder="Genero">
		<br>
		<input type="text" name="address" value="{{old('address')}}" placeholder="Direccion">
		<br>
		<input type="text" name="password" value="{{old('password')}}" placeholder="Contraseña">
		<button type="submit"> Guardar </button>
	</form>
</body<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Crear Usuario</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="container">
    <div class="row">
      <div class="col-md-10 offset-md-1 mt-5">
        <h1> <i class=""></i> Crear Usuario</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="./">
                <i class="fa fa-user-circle" aria-hidden="true"></i>
				<a href="{{ url('users') }}">Ir a Lista de Usuarios</a>
				<hr>
		<form action="{{ url('users') }}" method="post">@csrf
		@csrf
		<input type="text" name="fullname" value="{{ old('fullname') }}" placeholder="Nombre Completo">
		<br>
		<input type="text" name="email" value="{{ old('email') }}" placeholder="Correo Electrónico">
		<br>
		<input type="text" name="phone" value="{{ old('phone') }}" placeholder="Telefono">
		<br>
		<input type="date" name="birthdate" value="{{ old('birthdate') }}" placeholder="Fecha Nacimiento">
		<br>
		<select name="gender" value="{{ old('gender') }}" placeholder="Genero">
			<option>Genero</option>
			<option>Male</option>
			<option>Female</option>
		</select>
		<br>
		<input type="text" name="address" value="{{ old('address') }}" placeholder="Direccion">
		<br>
		<input type="password" name="password" value="{{ old('password') }}" placeholder="Contraseña">
		<br>
		<button type="submit" class="btn btn-success"> Guardar </button>
	</form>
</div>
</div>
</div>
</body>
</html>
</html>