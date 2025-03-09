<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>page2 PHP | Pablo Monteserín</title>
	  <meta name="description" content="Ejemplo de uso de las cookies con PHP. La información almacenada en la página cookies.php estará disponible en esta página">

</head>
<body>
<h1>En esta página mostramos el valor almacenado en las cookies en la página anterior</h1>

<div>
<?php
	echo $_COOKIE['nombre'];
?></div>

	
</body>
</html>