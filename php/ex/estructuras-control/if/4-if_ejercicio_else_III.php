<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ejercicio if else PHP | Pablo Monteserín</title>
		<meta name="description" content="Ejemplo básico de la estructura de control 'if', 'else if' y 'else' programada utilizando PHP">

</head>
<body>

<?php
	$dato = 5;
	if($dato > 5){
		echo "Aprobado";
	}
	else if($dato == 5){
		echo "Aprobado por los pelos";
	} else{
		echo "Suspenso";
	}
?>
	
</body>
</html>