<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>recorrer y contar elementos de un array | Pablo Monteserín</title>
		<meta name="description" content="Ejemplo de definición de un array en PHP y recorrido de todas sus posiciones">

</head>
<body>

	<?php 
	session_start();
	$arrayDeArrays = $_SESSION;

	foreach($arrayDeArrays as $cadaArray){
		echo $cadaArray[1]."<br/>";
	}

	?>
	
</body>
</html>