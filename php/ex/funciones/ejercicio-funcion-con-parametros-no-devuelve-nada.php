<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>función con parámetros que no devuelve nada en PHP</title>
		  <meta name="description" content="Ejemplo de una función de PHP con un parámetro de entrada que muestra un mensaje">

</head>
<body>
<h1>Llamada a una función PHP que recibe un parámetro</h1>
<?php
function hoyQuieroComer($comida){
	echo "Hoy quiero comer ". $comida;
}
if(isset($_GET['enviar'])){
$c = $_GET['comida'];
hoyQuieroComer($c);

}
?>
	

	<form action="#">
		
		<input type="text" name="comida">
		<input type="submit" name="enviar">
	</form>
</body>
</html>