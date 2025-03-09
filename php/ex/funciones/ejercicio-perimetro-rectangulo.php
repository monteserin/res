<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>calcular perímetro rectángulo en PHP | Pablo Monteserín</title>
		  <meta name="description" content="Ejercicio de PHP que recupera el alto y ancho de un paralelogramo y calcula su perímetro">

</head>
<body>
<h1>Calculo del perímetro de un paralelogramo con PHP a partir de los datos de un formulario</h1>
<form action="">
	<label for="ancho">Ancho: </label><input type="text" name="ancho">
<label for="ancho">Alto: </label><input type="text" name="alto">

<input type="submit" name="submit">
</form>

<?php


function calculaPerimetro($ancho, $alto){
	$resultado = $ancho*2 + $alto*2;
	echo $resultado;
}

if(isset($_REQUEST['submit'])){
calculaPerimetro($_REQUEST['ancho'], $_REQUEST['alto']);

}
?>
	
</body>
</html>