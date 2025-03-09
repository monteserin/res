<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ejercicio bucle for en PHP | Pablo Monteserín</title>
		  <meta name="description" content="Ejemplo de uso del bucle for de PHP para recorrer los primeros números pares dentro de los 100 primeros números naturales">
</head>
<body>
<h1>En el código fuente PHP de esta web hay un bucle que imprime los 100 primeros números pares</h1>
<?php
	for($i=0; $i<100; $i = $i+2){
			echo "La cifra ".$i." es par</br>";		
	}
?>
	
</body>
</html>