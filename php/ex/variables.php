<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	  <meta name="description" content="Ejemplo de declaración, concatenación y suma de variables PHP que almacenan tanto cadenas de texto como números">

	<title>variables en PHP | Pablo Monteserín</title>
</head>
<body>
	
<h1>Declaración e impresión de variables con PHP</h1>
	<?php 
	$texto="Soy una cadena";
	$i = 5;
	$j = 3;


	echo $texto;
	echo "$texto";
	echo "<br/>";
	echo $i." + ".$j."=<br/>";
	echo "$i + $j =<br/>";
	echo $i+$j;
	echo "<br/>";
	echo $i.$j;
	?>


</body>
</html>