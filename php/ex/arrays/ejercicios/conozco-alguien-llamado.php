<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ejercicio PHP recorrer array | Pablo Monteserín</title>
	<meta name="description" content="Ejemplo de como recorrer un array de palabras utilizando el bucle foreach de PHP para imprimiendo uno a uno todos los valores concatenados con un texto">

</head>
<body>
<h1>Definición de un array en PHP y uso de un bucle para recorrer sus valores</h1>
	<?php 
	$nombres = array("Juan", "Rosa", "Carmen", "Roberto", "Gerardo");
	foreach ($nombres as $key => $value) {
		echo "Conozco a alguien llamado ".$value."<br/>";
	}
	?>
	
</body>
</html>