<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>ejercicio bucle while en PHP | Pablo Monteserín</title>
	<meta name="description" content="Ejemplo de uso del bucle while de PHP para calcular el factorial de un número (ese número por todos los anteriores)">
</head>

<body>
	<h1>En el código fuente de este documento PHP calculamos con un bucle while el factorial de un número</h1>
	<?php
	$i = 5;
	$resultado = $i;
	while ($i > 1) {
		$resultado = $resultado * ($i - 1);
		--$i;
	}
	echo $resultado;
	?>

</body>

</html>