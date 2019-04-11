<?php 
	$edad = 27;
	$nombre = "Mauricio";
	$salario = 5000.5;

	//Variables tipo array
	$carros = ['volvo','mercedes','bmw','chevrolet'];

	echo $carros[1];  //Imprimer mercedes
	echo $carros[3];  //chevrolet
	$flores = ['flor1'=>'clavel','flor2'=>'margarita','flor3'=>'girasol'];
	echo $flores['flor3'];  //imprime girasol

	echo "Hola, soy ".$nombre." y tengo ".$edad." años <br>";
	$florciudad = [['clavel','bogota'],['girasol','cali']];
	echo $florciudad[0][0]; //clavel, bogota


	//VARIABLES TIPO OBJECT
	$resultado = [{"id":1,"nombre":"Bogota"},{"id":2,"nombre";"Medellin"}];
	

	if($edad<18){
		echo "Es menor de edad";
	} else {
		echo "Es mayor de edad";
	}

?>