<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tabla de la que puedo eliminar un registro | Pablo Monteserín</title>
		  <meta name="description" content="Ejemplo de consultar una base de datos para mostrar una serie de registros y eliminar aquel cuyo botón de borrado pulsamos">

</head>
<body>
	<?php
	include ("../../conexion_no_incluida_en_ficheros_por_seguridad.php");
	if(isset($_POST['botonEnvio'])){
		$sql = "delete from invitado where nombre='".$_POST['nombre']."'";
		mysqli_query($conexionPersonas, $sql);
	}
	$sql = "select * from invitado";
	$result = mysqli_query($conexionPersonas, $sql);
?>
<table border="3px">
	<?php	
	while($row = mysqli_fetch_assoc($result)){
		echo "<tr><td>".$row['nombre']."</td><br/>";
	}
	?>
</table>
<form method="post" action="#">
	<input type="text" name="nombre" />
	<input type="submit" name="botonEnvio" value="eliminar" />
</form>

</body>
</html>