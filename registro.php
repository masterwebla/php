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
			<option value="Bogota">Bogota</option>
			<option value="Medellin">Medellin</option>
			<option value="Cali">Cali</option>
		</select><br>
		<input type="submit" value="Guardar">
	</form>
</body>
</html>