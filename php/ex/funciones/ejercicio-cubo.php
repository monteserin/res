<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>calcular cubo en PHP | Pablo Monteserín</title>
		  <meta name="description" content="Ejemplo de una función PHP que recibe un parámetro numérico de entrada y calcula su cubo">

</head>
<body>
<h1>Definición de una función PHP que recibe parámetros</h1>
<form action="#">
	<input type="text" name="lado">
	<input type="submit">
</form>

<?php
function cubo($x){
	$resultado = $x*$x*$x;
	echo $resultado;
}

$cubo = 0;
if(isset($_REQUEST['lado'])){
	$cubo = $_REQUEST['lado'];
}

cubo($cubo);
?>
	
</body>
</html>