<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>if en formulario en PHP | Pablo Monteserín</title>
				  <meta name="description" content="Si el usuario no ha pulsado el botón de envío de un formulario, mostraremos un mensaje. Si lo ha pulsado, mostraremos otro">

</head>
<body>
<h1>En el código fuente de esta página está escrito un código PHP que procesa la información enviada</h1>
<form method="post" action="#">
	<input type="text" name="nombre">
	<input type="submit" name="botonEnviar" value="enviar">
</form>
<?php
	if(isset($_POST['botonEnviar'])){
		echo $_POST['nombre'];
	}else{
		echo "Boton no pulsado";
	}
?>
	
</body>
</html>