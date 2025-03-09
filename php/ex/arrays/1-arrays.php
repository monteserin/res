<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>arrays en PHP</title>
		<meta name="description" content="Ejemplo de definición de un array en PHP y acceso a una de sus posiciones">

</head>
<body>

	<?php 
	$day[0]="domingo";
	$day[1]="lunes";
	$day[2]="martes";
	$day[3]="miercoles";
	$day[4]="jueves";
	$day[5]="viernes";
	$day[6]="sabado";

	/*La funcion date, en conjunto con el modificador "w", devuelve el numero de dia que es hoy*/
	$dayNumber=date("w");

	echo "Hoy es ". $day[$dayNumber];
	?>
	
</body>
</html>