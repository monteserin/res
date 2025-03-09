<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>obtener información del cliente en PHP | Pablo Monteserín</title>
	  <meta name="description" content="Ejemplo de impresiones de la variable $_SERVER que nos devuelve información del servidor como su nombre, verisión, versión del navegador, etc.">

</head>
<body>
	<h1>Recuperamos valores de $_SERVER para obtener información del servidor</h1>
	<?php
	echo "Servidor al que se conecta es: ".$_SERVER['SERVER_NAME']."<br/>";
	echo "Navegador y SO: ".$_SERVER['HTTP_USER_AGENT']."<br/>";
	echo "Lenguaje del navegador (no del SO): ".$_SERVER['HTTP_ACCEPT_LANGUAGE']."<br/>";
	echo "Puerto por el que el cliente se conecta a internet: ".$_SERVER['SERVER_PORT']."<br/>";
	echo "Direccion IP (LAN) del usuario: ".$_SERVER['REMOTE_ADDR']."<br/>";
	echo "Ubicacion del fichero actual: ".$_SERVER['PHP_SELF']."<br/>";
	?>


</body>
</html>