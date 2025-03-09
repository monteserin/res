<?php
	include "../../../conexion_no_incluida_en_ficheros_por_seguridad.php";
	$sql = "select * from paciente";
	$result = mysqli_query($conexionHospital, $sql);
	$salidaTabla ="<table style=\"margin:auto;margin-top:15px\">
<tr><th>id</th><th>Nombre</th><th>Apellido</th></tr>";	
	while($row = mysqli_fetch_assoc($result)){
		$id = $row['id'];
		$nombre =  $row['nombre'];
		$apellido = $row['apellido'];
		
$salidaTabla.="<tr><td><a href='modificacion_baja.php?id=$id'>$id</a></td><td>$nombre</td><td>$apellido</td></tr>";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>consulta en PHP | Pablo Monteserín</title>
		  <meta name="description" content="Consulta tres campos (id, Nombre y Apellido) a unta tabla de pacientes de una base de datos MySQL utilizando código PHP">

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
	echo $salidaTabla;
?>
</table>
<?php 
include("footer.php");
?>
</div>
</body>
</html>
