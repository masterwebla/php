<?php 
	//PASO 1: Conectarnos a la BD
	include('conexion.php');

	//PASO 2: Consultar la tabla ciudades
	$sql_consulta = "SELECT * FROM ciudades";
	$resultado = $conn->query($sql_consulta);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registro de Usuarios</title>
</head>
<body>
	<h1 id="titulo">Formulario de Registro</h1>
	<form action="guardar.php" method="post">
		Nombres: <input type="text" name="nombres" required><br>
		Email: <input type="email" name="email" required><br>
		Edad: <input type="number" name="edad" min="10" max="100"><br>
		Ciudad: 
		<select name="ciudad">
			<?php while($fila = $resultado->fetch(PDO::FETCH_ASSOC)){ ?>
				<option value="<?php echo $fila['id']; ?>"><?php echo $fila['nombre'] ?></option>
			<?php } ?>
		</select><br>
		<input type="submit" value="Guardar">
	</form>
</body>
</html>