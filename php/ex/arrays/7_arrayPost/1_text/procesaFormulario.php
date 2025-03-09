<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Página de recogida de datos de un formulario PHP</title>
				<meta name="description" content="En esta página mostramos el valor enviado desde un formulario HTML">

</head>
<body>
	

<?php
	$nombre = $_POST['nombre'];
	echo $nombre;
?>




</body>
</html>