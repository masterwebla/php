<?php 
	//PASO 1: RECIBIR LOS DATOS Y VALIDARLOS
	if(!empty($_POST['nombres']) && !empty($_POST['email'])){
		$nombres = $_POST['nombres'];
		$email = $_POST['email'];
		$edad = $_POST['edad'];
		$ciudad = $_POST['ciudad'];

		//PASO 2: CONECTARNOS CON LA BASE DE DATOS
		include('conexion.php');

		//PASO 3: INSERTAR LOS DATOS EN LA TABLAR (SQL)
		$sql_insertar = "INSERT INTO usuarios (nombres,email,edad,ciudad) 
			VALUES ('$nombres','$email','$edad','$ciudad')";
		$conn->exec($sql_insertar);
		header("location:listar.php");
	} else {
		header("location:registro.php");
	}
?>