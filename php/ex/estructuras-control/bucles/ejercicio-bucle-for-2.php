<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ejercicio avanzado bucle for en PHP | Pablo Monteserín</title>
		  <meta name="description" content="Ejemplo de uso del bucle for de PHP mezclado con la estructura if para mostrar números pares dentro de los 100 primeros números">
</head>
<body>
	
	<h1>Bucle for para mostrar números pares programados en PHP</h1>

<?php
	for($i=0; $i<100; $i++){
		if($i%2==0){
			echo "La cifra ".$i." es par</br>";		
		}
	}
?>



</body>
</html>