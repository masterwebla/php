<?php 
	//PASO 1: Recibir la info que se va a actualizar
	$id = $_POST['id'];
	$nombres = $_POST['nombres'];
	$email = $_POST['email'];
	$edad = $_POST['edad'];
	$ciudad = $_POST['ciudad'];

	//PASO 2: Conectarnos con la Base de Datos
	include('conexion.php');

	//PASO 3: SQL para actualizar
	$sql_actualiza = "UPDATE usuarios SET nombres='$nombres',email='$email',edad='$edad',ciudad='$ciudad' WHERE id='$id'";
	$conn->exec($sql_actualiza);

	header("location:listar.php");

?>