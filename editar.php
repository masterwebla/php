<?php
	//PASO 1: RECIBIR POR GET EL ID DEL USUARIO QUE SE VA A EDITAR
	$id = $_GET['id'];

	//PASO 2: CONECTARNOS A LA BASE DE DATOS
	include('conexion.php');

	//PASO 3: CONSULTAR LA INFORMACIÓN DEL USUARIO CON EL ID
	$sql_consulta = "SELECT * FROM usuarios WHERE id='$id'";
	$resultado = $conn->query($sql_consulta);
	$fila = $resultado->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Editar Usuario</title>
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
		<h1>Editar usuario <?php echo $fila['nombres']; ?></h1>
		<form action="actualizar.php" method="post">
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<div class="form-group">
				<label>Nombres:</label>
				<input type="text" name="nombres" value="<?php echo $fila['nombres']; ?>" required class="form-control">
			</div>
			<div class="form-group">
				<label>Email: </label>
				<input type="email" name="email" class="form-control" value="<?php echo $fila['email']; ?>" required>
			</div>
			<div class="form-group">
				<label>Edad: </label>
				<input type="number" name="edad" class="form-control" value="<?php echo $fila['edad']; ?>" min="10" max="100">
			</div>
			<div class="form-group">
				<label>Ciudad</label>
				<select name="ciudad" class="form-control">
					<option <?php if($fila['ciudad']=="Bogota"){ ?> selected <?php } ?> value="Bogota">Bogota</option>
					<option <?php if($fila['ciudad']=="Medellin"){ ?> selected <?php } ?> value="Medellin">Medellin</option>
					<option <?php if($fila['ciudad']=="Cali"){ ?> selected <?php } ?> value="Cali">Cali</option>
				</select>
			</div>
			<a class="btn btn-danger" href="listar.php">Cancelar</a>
			<button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Guardar</button>
		</form>
	</div>
</body>
</html>