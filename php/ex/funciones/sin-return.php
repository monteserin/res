<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ejercicio función sin return en PHP | Pablo Monteserín</title>
		  <meta name="description" content="Ejemplo de definición una función PHP que tiene un parámetro pero no devuelve nada, simplemente muestra un 'echo' a partir de la cadena de texto introducida">

</head>
<body>
<h1>Definición y uso de una función en un documento PHP</h1>
<?php
	function saludar($parametroDeEntrada){
		echo "Hola ".$parametroDeEntrada;
	}

	saludar("Pablo");
?>

	
</body>
</html>