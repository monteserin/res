<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>funciones de texto en PHP | Pablo Monteserín</title>
			  <meta name="description" content="Ejemplo de uso de varias funciones para manipulación de cadenas de textos en PHP: substr, strlen, strtoupper, strtolower, strtr">

</head>
<body>
<h1>Uso de varios métodos PHP para manipulación de cadenas de texto</h1>
<?php

	$nombre = "Ramón";

	echo "Las dos primeras letras son: ".substr($nombre, 0, 2);

	echo "<br/>La palabra tiene ".strlen($nombre) ." letras.";

	echo "<br/>La palabra pasada a mayúsculas es: ".strtoupper($nombre);

	echo "<br/>La palabra pasada a minúsculas es: ".strtolower($nombre);

	echo "<br/>".strtr(strtoupper($nombre),"àèìòùáéíóúçñäëïöü","ÀÈÌÒÙÁÉÍÓÚÇÑÄËÏÖÜ");

?>


	
</body>
</html>