<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>consulta registro hospital en PHP| Pablo Monteserín</title>
		  <meta name="description" content="Consulta a una base de datos MySQL con los registros de los pacientes de un hospital utilizando PHP y mostrando los resultados en una tabla HTML">

<style>
td,th{
border-style:inset
}
</style>
</head>
<body style="background-color:#66CDAA">
<div style="text-align:center; width:24em; margin:auto; border: #FFC0CB 6px groove;">
<h1 style="font-family:helvetica; margin-left:auto; margin-right:auto">Consulta</h1>
<?php
	include "../../../conexion_no_incluida_en_ficheros_por_seguridad.php";
	$sql = "select * from paciente";
	$result = mysqli_query($conexionHospital, $sql);
	echo "<table style='margin:auto;margin-top:15px'>";
	echo "<tr><th>id</th><th>Nombre</th><th>Apellido</th><th>fecha</th></tr>";
	while($row = mysqli_fetch_assoc($result)){
		echo"<tr>";
		echo "<td>".$row['id'];
		echo "</td><td>";
		echo $row['nombre'];
		echo"</td><td>";
		echo $row['apellido'];
		echo"</td><td>";
		echo $row['fecha_alta'];
		echo "</td></tr>";
	}
echo "</table>";
include("footer.php");
?>
</div>
</body>
</html>
