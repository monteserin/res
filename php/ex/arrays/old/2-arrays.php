<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>arrays en PHP | Pablo Monteser�n</title>
		<meta name="description" content="Ejemplo de definici�n de un array en PHP y acceso a una de sus posiciones">

</head>
<body>


	<?php 
	$day = array("domingo", "lunes", "martes", "miercoles", "jueves", "viernes", "s��bado");

	/*La funcion date, en conjunto con el modificador "w", devuelve el n�mero de d�a que es hoy*/
	$dayNumber=date("w");

	echo "Hoy es ".$day[$dayNumber];
	?>


	
</body>
</html>