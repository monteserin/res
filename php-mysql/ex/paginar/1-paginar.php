<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>paginar con PHP | Pablo Monteserín</title>
<meta name="description" content="Ejemplo básico de paginación con PHP consultando los registros que van desde la posición 0 a la posición 10 de una tabla de una base de datos MySQL">

</head>
<body>
	<h1>Consulta de los registros de una base de datos MySQL utilizando PHP</h1>

	<?php
	include "../../../conexion_no_incluida_en_ficheros_por_seguridad.php";	
	$sql = "SELECT * FROM jugador LIMIT 0,10";
	$result = mysqli_query($conexionFutbol, $sql)
	or die("error en la consulta");

	while($row = mysqli_fetch_assoc($result)){
		echo $row['nombre']."</br>";
	}
	?>


</body>
</html>