<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
<title>listado futbol en PHP | Pablo Monteserín</title>
	  <meta name="description" content="Ejemplo de consulta a una base de datos MySQL utilizando PHP para recperar los datos de equipos de futbol, su nombre, escudo, fecha de fundación...">

</head>
<body>


<h1 style="text-align:center; font-family:helvetica">EQUIPOS DE PRIMERA DIVISIÓN</h1>
<div style="width:750px; margin:auto; background-color:red; font-family:helvetica">
<?php
	include ("../../../conexion_no_incluida_en_ficheros_por_seguridad.php");
	$sql = "SELECT * FROM equipo";
	$result = mysqli_query($conexionFutbol,$sql);
	while($row = mysqli_fetch_assoc($result)){
?>
		<table border="1" style="float:left; width:250px; height:120px; background-color:#F3F6D0">
			<tr>
				<td  rowspan="3">
					<a href="jugadores.php?equipo_cod=<?php echo ($row['equipo_cod']."&foto_escudo=".$row['foto_escudo']."&foto_equipo=".$row['foto_equipo']); ?>"><img style="border:none" alt="foto escudo" src="imagenes/<?php echo ($row['foto_escudo']); ?>">
				</td>
				<td>Nombre: <?php echo ($row['nombre']); ?>
				</td>	
			</tr>
			<tr>
				<td>Fundación: <?php echo ($row['fundacion']); ?>
				</td>
			</tr>
			<tr>
				<td>Presidente <?php echo ($row['presidente']); ?>
				</td>
			</tr>
		</table>
<?php
	}
?>
</div>
</body>
</html>