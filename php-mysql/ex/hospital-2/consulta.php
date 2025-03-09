<?php
include "../../../conexion_no_incluida_en_ficheros_por_seguridad.php";
$sql = "select * from paciente";
$result = mysqli_query($conexionHospital, $sql);
$salidaTabla="";
while($row = mysqli_fetch_assoc($result)){
	$id = $row['id'];
	$nombre =  $row['nombre'];
	$apellido = $row['apellido'];
	$fecha = $row['fecha_alta'];
	$salidaTabla.="<tr><td><a href='modificacion_baja.php?id=$id'>$id</a></td><td>$nombre</td><td>$apellido</td><td>$fecha</td></tr>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>consulta en hospital | Pablo Monteserín</title>
		  <meta name="description" content="Consulta a una base de datos MySQL con los pacientes de un hospital utilizando PHP para recuperar los campos id, nombre, apellidos y fecha">

	<style>
		td,th{
			border-style:inset
		}
	</style>
</head>
<body style="background-color:#66CDAA">
	<div style="text-align:center; width:24em; margin:auto; border: #FFC0CB 6px groove;">
		<h1 style="font-family:helvetica; margin-left:auto; margin-right:auto">Consulta</h1>
		<table style="margin:auto;margin-top:15px">
			<tr><th>id</th><th>Nombre</th><th>Apellido</th><th>fecha</th></tr>
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
