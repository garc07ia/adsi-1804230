<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-10 offset-1">
			<h1><i class="fa fa-users"></i>Adicionar Usuarios</h1>
			<hr>
			<form action="./" method="post" enctype="multipart/form-data">
				<input type="hidden" name="method" value="store">
                <div class="form-group">
                  <label for="">Nombre Completo</label>
                  <input type="text" class="form-control" name="names" required>
                </div>
                <!--  -->
                <div class="form-group">
                  <label for="birthdate">Fecha Nacimiento</label>
                  <input type="date" class="form-control" name="birthdate" placeholder="yyyy-mm-dd" required>
                </div>
                <!--  -->
                <div class="form-group">
                  <label for="email">Correo Electronico</label>
                  <input type="email" class="form-control" name="email" required>
                </div>
                <!--  -->
                <div class="form-group">
                  <label for="photo">Foto</label>
                  <input type="file" class="form-control form-control-file" accept="image/*" name="photo" required>
                </div>
                <!--  -->
                <div class="form-group">
                  <label for="password">Contraseña:</label>
                  <input type="password" class="form-control form-control-file" accept="image/*" name="password" required>
                </div>
                <!--  -->
                <div class="form-group">
                  <button class="$bt btn btn-success">
                    <i class="fa fa-save"></i>
                    Guardar
                  </button>
                  <button class=" btn btn-dark">
                    <i class="fa fa-eraser"></i>
                    Limpiar
                  </button>
                </div>
              </form>
			</div>
		</div>
	</div>
</body>
</html>