<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mostramos el valor enviado desde un textarea de un formulario</title>
</head>
<body>
				<meta name="description" content="Ejemplo de procesamiento de un formulario HTML utilizando PHP">


<?php
	$nombre = $_POST['combo'];
	echo $nombre;
?>

</body>
</html>