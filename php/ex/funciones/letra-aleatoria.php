<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>letra aleatoria en PHP | Pablo Monteserín</title>
		  <meta name="description" content="Ejemplo de un código PHP que imprime una letra aleatoria de cuna cadena de texto">

</head>
<body>
	<h1>Uso de los métodos strl, rand y substr para recuperar una letra aleatorio del nombre almacenado en una variable PHP</h1>
	<?php 
	$nombre = "Pablo";
	$longitud = strlen($nombre);
	$rand = rand(0, $longitud-2);
	echo substr($nombre, $rand, 1);
	?>
	
</body>
</html>