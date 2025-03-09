<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ejercicio PHP | Pablo Monteserín</title>
	<meta name="description" content="Ejemplo de uso del bucle foreach de PHP usado para recorrer un array e ir imprimiendo el doble de cada valor">

</head>
<body>
<h1>Ejemplo de uso del bucle foreach de PHP para recorrer un array</h1>
	<?php 
	$my_list = array(1,9,3,8,5,7);

	foreach ($my_list as $key => $value) {
		echo ($value*2)."<br/>";
	}
	?>
	
	
</body>
</html>