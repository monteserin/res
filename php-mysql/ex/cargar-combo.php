<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>cargar combo en PHP | Pablo Monteserín</title>
	  <meta name="description" content="Ejemplo de como hacer una consulta a la base de datos para cargar una select con datos">

</head>
<body>
	<h1>Consulta de los registros de una base de datos usando PHP</h1>
<?php
	include "../../conexion_no_incluida_en_ficheros_por_seguridad.php";
	
	$sql = "select * from paciente";	
	$result = mysqli_query($conexionHospital, $sql);
	
	echo "<select>";
	while($row = mysqli_fetch_assoc($result)){
		echo ("<option>".$row['nombre']."</option>");
	}
	echo "</select>";
?>


</body>
</html>