<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ejercicio saludar con return en PHP | Pablo Monteserín</title>
		  <meta name="description" content="Ejemplo de definición de funciones con PHP, con y sin return. Haciendo un echo de lo que nos devuelve la función veremos que diferencias existen">

</head>
<body>
<h1>Definición de funciones con PHP, con y sin return</h1>
<?php
	function saludar1(){
		$textoDevuelto = "buenos dias";
		return $textoDevuelto;
	}
	function saludar2(){
		$textoDevuelto = "buenas tardes";
	}


	echo saludar1();
	echo saludar2();
?>

	
</body>
</html>