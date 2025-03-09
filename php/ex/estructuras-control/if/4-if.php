<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>if, else, y else if en PHP | Pablo Monteserín</title>
	<meta name="description" content="Ejemplo básico de la estructura de control 'if', 'else if' y 'else' programada utilizando PHP">

</head>
<body>
<h1>Comparación de variables usando la estructura de control 'if' de PHP</h1>
	<?php
	$dato1 = 3;
	$dato2 = 5;
	if($dato1 > $dato2){
		echo "dato1 es mayor que dato2";
	}else if($dato1 == $dato2){
		echo "dato1 es igual que dato2";
	}else{
		echo "dato1 es mayor que dato2";
	}
	?>
	
</body>
</html>