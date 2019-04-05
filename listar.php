<?php 
	//PASO 1: CONECTARNOS CON LA BASE DE DATOS
	include("conexion.php");

	//PASO 2: INSTRUCCIÓN SQL PARA CONSULTAR
	$sql_consultar = "SELECT * FROM usuarios ORDER BY nombres";
	$resultado = $conn->query($sql_consultar);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Listar Usuarios</title>
	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h1 class="text-center">Listado de Usuarios <a class="btn btn-success" href="registro.php"><i class="fas fa-plus"></i></a></h1>
		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nombres</th>
					<th>Email</th>
					<th>Edad</th>
					<th>Ciudad</th>
					<th>Opciones</th>
				</tr>
			</thead>
			<tbody>
				<?php while($fila = $resultado->fetch(PDO::FETCH_ASSOC)){ ?>
					<tr>
						<td><?php echo $fila['id']; ?></td>
						<td><?php echo $fila['nombres']; ?></td>
						<td><?php echo $fila['email']; ?></td>
						<td><?php echo $fila['edad']; ?></td>
						<td><?php echo $fila['ciudad']; ?></td>
						<td>
							<a class="btn btn-info" href="editar.php?id=<?php echo $fila['id']; ?>"><i class="fas fa-edit"></i></a>
							<a class="btn btn-danger" href="#"><i class="fas fa-trash"></i></a>
						</td>
					</tr>
				<?php } ?>
			</tbody>	
		</table>
	</div>	
</body>
</html>