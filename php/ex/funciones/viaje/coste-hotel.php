<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ejercicio coste hotel en PHP | Pablo Monteserín</title>
			<meta name="description" content="Ejemplo de uso de funciones PHP para calcular el coste de un hotel en función del número de noches">

</head>
<body>
<h1>Uso de una función en PHP</h1>
	<form action="#">
		<label>Introduzca el número de noches</label>
		<input type="text" id="numNoches" name="numNoches">
		<input type="submit" name="submit" value="calcular coste">
		<br><br>

	</form>

	<?php

	if(isset($_REQUEST['submit'])){
		echo coste_hotel($_REQUEST['numNoches']);

	}
	function coste_hotel($numNoches){
		return 140*$numNoches;
	}
	?>

</body>
</html>
