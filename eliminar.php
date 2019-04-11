<?php 
	//PASO 1: Recibir el ID del registro que se va a borrar
	$id = $_GET['id'];

	//PASO 2: Conectarnos con la Base de Datos
	include('conexion.php');

	//PASO 3: SQL para borrar
	$sql_borra = "DELETE FROM usuarios WHERE id='$id'";
	$conn->exec($sql_borra);

	header("location:listar.php");
?>