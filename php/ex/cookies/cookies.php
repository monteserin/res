<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>cookies en PHP | Pablo Monteserín</title>
	<meta name="description" content="Ejemplo de uso básico de las cookies utilizando PHP, la infromación guardada estará disponilbe en la siguiente página">

</head>
<body>
	<h1>Uso de cookies en PHP</h1>
	<?php
	$nombre = "Juan";
	setcookie("nombre", $nombre);
	echo $_COOKIE['nombre'];
	?>
	<br/><a href="page2.php">Ir a page2</a>


</body>
</html>