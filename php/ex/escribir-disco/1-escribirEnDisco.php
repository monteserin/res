<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>escribir en disco | Pablo Monteserín</title>
    <meta name="description" content="Ejemplo del código PHP para escribir texto en un fichero alojado en nuestro servidor">

</head>
<body>
	

	<?php
	$file = "1-escribirEnDisco.txt";
	/*Creamos un puntero a partir del cual vamos a escribir*/	
	$fp = fopen($file, "r+");

	/*El documento de texto en el que escribo debería estar en la misma codificación que 
	el presente php*/
	fputs($fp, "fputs es más rápida que fwrite");
	fwrite($fp, "fputs es más rápida que fwrite");
	/*cerrar el archivo*/
	fclose($fp);
	?>

</body>
</html>