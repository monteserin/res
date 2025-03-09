<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>calidades futbol en PHP | Pablo Monteserín</title>
		  <meta name="description" content="Pintando calidades de jugadores consultando una base de datos MySQL y utilizando PHP">

</head>
<body>
	
	<?php	
	if(isset($_POST['equipo'])){
		$equipoSeleccionado = $_POST['equipo'];
	}else $equipoSeleccionado = 1;

	include "funciones.php";
	
	pintarCombo($conexionFutbol, $equipoSeleccionado);
	pintarTablaNombreJugadoresYTablaCalidades($equipoSeleccionado);
	?>


</body>
</html>
