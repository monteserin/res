<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>formulario PHP | Pablo Monteserín</title>
		  <meta name="description" content="Ejemplo de programación de una calculadora usando PHP y utilizando la estructura switch para decidir que operación realizar">

</head>
<body>

<?php
	$operando1 = $_GET['operando1'];
	$operando2 = $_GET['operando2'];
	$operacion = $_GET['operador'];
	

	function calcula($op1, $op2, $op){
		switch($op){
			case "+":
				$solucion = $op1 + $op2;
				break;
			case "-":
				$solucion = $op1 - $op2;
				break;
			case "*":
				$solucion = $op1 * $op2;
				break;
			case "/":
				$solucion = $op1 / $op2;
		}
		return $solucion;
	}
	
	$resultado = calcula($operando1, $operando2, $operacion);
	echo $resultado;
?>
	
</body>
</html>