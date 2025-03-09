<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>formulario php | Pablo Monteserín</title>
			<meta name="description" content="Ejemplo de calculadora programada con un formulario HTML y PHP, en esta página usamos el método eval para realizar los cálculos">

</head>
<body>
	
<?php
	$operando1 = $_GET['operando1'];
	$operando2 = $_GET['operando2'];
	$operador = $_GET['operador'];
	
	$resultado = eval("return ".$operando1.$operador.$operando2 .";");
	
	echo "La solución es: ".$resultado;
?>

</body>
</html>