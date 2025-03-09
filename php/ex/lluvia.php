<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//ES"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="ES" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Flood Prevent</title>
	  <meta name="description" content="Ejercicio de PHP que gestiona un tanque de agua. Mostraremos un resultado en función de los parámetros 'rain' y 'filled', recuperados de la url">


</head>
<body>
	<div>
		<?php
		define("MAX_CAPACITY",12000);
		define("ROOF_AREA",125);
		define("SAFE_LIMIT",80);
		define("ALERT_LIMIT",90);
		define("DANGER_LIMIT",100);

		$rain=$_GET['rain'];

		$filled=$_GET['filled'];

		$tanque_inicial=MAX_CAPACITY*$filled/100;
//echo $tanque_inicial;

		$agua_tejado=ROOF_AREA*$rain;
//echo $agua_tejado;

		$estimacion_agua_tanque_tejado=$tanque_inicial+$agua_tejado;
//echo $estimacion_agua_tanque_tejado;

		$agua_segura=MAX_CAPACITY*SAFE_LIMIT/100;
//echo $agua_segura;


		$agua_a_drenar=$estimacion_agua_tanque_tejado-$agua_segura;
//echo $agua_a_drenar;

		echo "<h1>Flood Prevent </h1>";

		echo "<p>Initial water int tank: $tanque_inicial</p>";
		echo "<p>Total raining on the roof: $agua_tejado</p>";
		echo "<p>Total potencial water before rain: $estimacion_agua_tanque_tejado</p>";
		echo "<h2>DANGER</h2>"; 
		echo "<p>You must drain $agua_a_drenar liters to be in safe zone</p>";
		?>
	</div>
</body>
</html>