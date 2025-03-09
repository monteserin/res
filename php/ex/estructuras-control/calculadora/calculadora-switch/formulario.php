<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejemplo de calculadora programada con PHP</title>
			<meta name="description" content="Ejemplo de calculadora programada con un formulario HTML y PHP, en esta página usamos la estructura de control switch para realizar los cálculos">

</head>
<body>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<?php
	$operando1 = $_GET['operando1'];
	$operando2 = $_GET['operando2'];
	$operador = $_GET['operador'];
	
	switch($operador){
		case "+":
			$solucion = $operando1 + $operando2;
			break;
		case "-":
			$solucion = $operando1 - $operando2;
			break;
		case "*":
			$solucion = $operando1 * $operando2;
			break;
		case "/":
			$solucion = $operando1 / $operando2;
			break;	
		}
	echo "La solución es: ".$solucion;
?>

</body>
</html>