<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>formulario con if en PHP - detecta si el botón fue pulsado</title>
		<meta name="description" content="Ejemplo de como usar la estructura de control if para detectar si el usuario ha pulsado el botón de envío">

</head>
<body>
<h1>Evaluar con PHP si el botón de envío fue pulsado</h1>
<?php
	if(isset($_POST['botonEnviar'])){
		echo "boton pulsado!!!";
	}
?>
<form method="post" action="#">
	<input type="submit" name="botonEnviar" value="enviar">
</form>
	
</body>
</html>