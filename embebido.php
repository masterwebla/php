<?php 
	$nombre = "Mauricio";
	$edad = 37;
	$foto = "https://images.eltiempo.digital/files/image_370_246/uploads/2017/07/31/597feecaca017.jpeg";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Mi primera web dinámica</title>
</head>
<body>
	<h1>Bienvenidos</h1>
	<img src="<?php echo $foto; ?>" alt="<?php echo $nombre; ?>">
	<p>Hola <?php echo $nombre; ?>, usted tiene tantos <?php echo $edad; ?> años</p>
	<?php if($edad>18){ ?>
		<div>
			<p>Esto es información exclusiva para adultos</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat iusto dicta porro, perspiciatis tenetur recusandae eaque doloremque aspernatur esse assumenda eius veritatis consectetur mollitia rem, animi praesentium alias dignissimos. Accusamus.</p>
		</div>
	<?php } ?>
</body>
</html>