<?php 
	//PASO 1: CONECTARNOS CON LA BASE DE DATOS
	include("conexion.php");

	//PASO 2: INSTRUCCIÓN SQL PARA CONSULTAR
	$sql_consultar = "SELECT * FROM usuarios";
	$resultado = $conn->query($sql_consultar);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Listar Usuarios</title>
</head>
<body>
	<h1>Listado de Usuarios</h1>
	<table width="100%" border="1">
		<tr>
			<th>Nombres</th>
			<th>Email</th>
			<th>Edad</th>
			<th>Ciudad</th>
			<th>Opciones</th>
		</tr>
		<?php while($fila = $resultado->fetch(PDO::FETCH_ASSOC)){ ?>
			<tr>
				<td><?php echo $fila['nombres']; ?></td>
				<td><?php echo $fila['email']; ?></td>
				<td><?php echo $fila['edad']; ?></td>
				<td><?php echo $fila['ciudad']; ?></td>
				<td></td>
			</tr>
		<?php } ?>
	</table>
</body>
</html>