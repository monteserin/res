<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio formulario con if en PHP</title>
	<meta name="description" content="En este ejercicio realizado con PHP si el usuario ha pulsado el botón de envío mostraremos un mensaje, y si no, mostraremos otro">

</head>
<body>
	<h1>Detección de si un botón fue pulsado utilizando PHP</h1>
	<?php
	if(isset($_POST['botonEnviar'])){
		echo "boton pulsado!!!";
	}else{
		echo "el boton no fue pulsado!";
	}
	?>

	<form method="post" action="#">
		<input type="submit" name="botonEnviar" value="enviar">
	</form>


</body>
</html>