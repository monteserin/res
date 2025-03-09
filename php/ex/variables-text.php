<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>variables de texto en PHP | Pablo Monteserín</title>
	  <meta name="description" content="Ejemplo de como crear y concatenar variables de texto utilizando PHP. Para definir la variable le pondremos '$' delante y para concatenarla usaremos un '.'">

</head>
<body>
<h1>Ejemplo de definición e impresión de variables con PHP</h1>

	<?php
	$texto="Juan <br>";
	echo $texto;
	echo "$texto";
	echo '$texto';
	echo "Hola". $texto;
	echo "Hola $texto";
	echo 'Hola $texto';
	?>



	
</body>
</html>