<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>funciones de texto en PHP | Pablo Monteser�n</title>
			  <meta name="description" content="Ejemplo de uso de varias funciones para manipulaci�n de cadenas de textos en PHP: substr, strlen, strtoupper, strtolower, strtr">

</head>
<body>
<h1>Uso de varios m�todos PHP para manipulaci�n de cadenas de texto</h1>
<?php

	$nombre = "Ram�n";

	echo "Las dos primeras letras son: ".substr($nombre, 0, 2);

	echo "<br/>La palabra tiene ".strlen($nombre) ." letras.";

	echo "<br/>La palabra pasada a may�sculas es: ".strtoupper($nombre);

	echo "<br/>La palabra pasada a min�sculas es: ".strtolower($nombre);

	echo "<br/>".strtr(strtoupper($nombre),"�����������������","�����������������");

?>


	
</body>
</html>