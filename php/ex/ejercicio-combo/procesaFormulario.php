<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>procesar formulario PHP | Pablo Monteserín</title>
	<meta name="description" content="Ejemplo de envío de información desde el formulario HTML de esta página web a un documento PHP en el que se visualizará la opción escogida">

</head>
<body>
	
	<?php
	$nombre = $_POST['combo'];
	echo $nombre;
	?>


</body>
</html>