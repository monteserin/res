<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>animales en PHP | Pablo Monteserín</title>
	<meta name="description" content="Ejemplo de uso del método substr() de PHP para coger trozos de cadenas de texto">

</head>
<body>

<?php
	$animals = "catdogfrog";
	$cat = substr($animals, 0,3);
	$dog = substr($animals, 3, 3);
	$frog = substr($animals, 6,4);
	echo $cat;
	echo "<br/>";
	echo $dog;
	echo "<br/>";
	echo $frog;
?>
	
</body>
</html>