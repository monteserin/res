<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>teoría eval | Pablo Monteserín</title>
			<meta name="description" content="Ejemplo de uso del método eval de PHP para ejecutar una cadena de texto">

</head>
<body>
	
	<?php
	$signo = "*";
	$a=3;
	$b=6;
	$resultado = eval("return ".$a.$signo.$b." ;");
	echo $resultado;
	?>

</body>
</html>