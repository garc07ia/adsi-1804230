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
			<h1><i class="fa fa-users"></i>Lista Usuarios</h1>
			<hr>
			<a href="" class="btn btn-success mb-3">
				<i class="fa fa-plus"></i>
				Adicionar Usuario
			</a>
				<table class="table table-striped table-hover table-sm">
					<thead>
						<tr>
							<th>Nombre Completo</th>
							<th>Fecha de cumpleaños</th>
							<th>Correo Electronico</th>
							<th>Rol</th>
						</tr>
					</thead>
					<tbody>
					<?php 
						while($row = mysqli_fetch_array($data)){
					?>
							 <tr>
								 <td><?php echo $row['names']?></td>
								 <td><?php echo $row['birthdate']?></td>
								 <td><?php echo $row['email']?></td>
								 <td><?php echo $row['role']?></td>
							</tr>
					<?php 
						}
					 ?>
	 			</tbody>
	 		</table>
			</div>
		</div>
	</div>
	
</body>
</html>