<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Editar</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-10 offset-1">
			<h1><i class="fa fa-users"></i>Editar Usuarios</h1>
			<hr>
      <?php 
            while($row = mysqli_fetch_array($data)){
          ?>
			<form action="./" method="post" enctype="multipart/form-data">
        <input type="hidden" name="method" value="update">
				<input type="hidden" name="id" value="<?php echo $row['id']?>">
                <div class="form-group">
                  <label for="">Nombre Completo</label>
                  <input type="text" class="form-control" name="names" value="<?php echo $row['names']?>" required>
                </div>
                <!--  -->
                <div class="form-group">
                  <label for="birthdate">Fecha Nacimiento</label>
                  <input type="date" class="form-control" name="birthdate" placeholder="yyyy-mm-dd" value="<?php echo $row['birthdate']?>" required>
                </div>
                <!--  -->
                <div class="form-group">
                  <label for="email">Correo Electronico</label>
                  <input type="email" class="form-control" name="email" value="<?php echo $row['email']?>" required>
                </div>
                <!--  -->
                <div class="form-group">
                  <label for="photo">Foto</label>
                  <input type="file" class="form-control form-control-file" accept="image/*" name="photo" >
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
              <?php 
            }
           ?>
			</div>
		</div>
	</div>
</body>
</html>