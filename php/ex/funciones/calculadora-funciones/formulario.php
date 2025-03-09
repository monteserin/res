<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>formulario php | Pablo Monteserín</title>
		  <meta name="description" content="Ejemplo de programación de una calculadora usando PHP y definiendo una función por cada operación">

</head>
<body>
	
	<?php
	$operando1 = $_GET['operando1'];
	$operando2 = $_GET['operando2'];
	$operador = $_GET['operador'];
	
	function suma($operando1, $operando2){
		$solucion = $operando1 + $operando2;
		return $solucion;	
	}
	
	
	function resta($operando1, $operando2){
		$solucion = $operando1 - $operando2;
		return $solucion;			
	}
	function multiplica($operando1, $operando2){
		$solucion = $operando1 * $operando2;
		return $solucion;			
	}
	function divide($operando1, $operando2){
		$solucion = $operando1 / $operando2;		
		return $solucion;	
	}
	function resto($operando1, $operando2){
		$solucion = $operando1 % $operando2;		
		return $solucion;	
	}
	function unarioSuma($operando1, $operando2){
		$operando1++;
		$solucion = $operando1;		
		return $solucion;	
	}
	function unarioResta($operando1, $operando2){
		$operando1--;
		$solucion = $operando1;		
		return $solucion;	
	}
	
	switch($operador){
		case "+":
			$solucion = suma($operando1, $operando2);
			break;
		case "-":
			$solucion = resta($operando1, $operando2);
			break;
		case "*":
			$solucion = multiplica($operando1, $operando2);
			break;
		case "/":
			$solucion = divide($operando1, $operando2);
			break;
		case "%":
			$solucion = resto($operando1, $operando2);
			break;
		case "++":
			$solucion = unarioSuma($operando1, $operando2);
			break;
		case "--":
			$solucion = unarioResta($operando1, $operando2);
			break;		
		}
	echo ($solucion);
?>

</body>
</html>