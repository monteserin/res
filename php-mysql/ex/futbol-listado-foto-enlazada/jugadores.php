<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>listado futbol en PHP - mostrar jugadores | Pablo Monteserín</title>
	<meta name="description" content="Ejemplo consulta a una base de datos MySQL con un listado de jugadores de futbol, para mostrar los jugadores, la foto del escudo y la del equipo">

</head>
<body>
<?php
	include ("../../../conexion_no_incluida_en_ficheros_por_seguridad.php");
	$fotoEquipo = $_GET['foto_equipo'];
	$fotoEscudo = $_GET['foto_escudo'];
	$equipoCod = $_GET['equipo_cod'];
	$sql = "SELECT * FROM jugador WHERE equipo_cod='$equipoCod'";
	
	$result = mysqli_query($conexionFutbol, $sql);
	
?>

<div style="width:600px; margin:auto; background-color:#F3F6D0">
<h1 style="text-align:center; font-family:trebuchet">JUGADORES DE PRIMERA DIVISIÓN</h1>
<table style="width:100%">
	<tr>
		<td style="text-align:center">
			<img alt="foto equipo" src="<?php echo ("imagenes/".$fotoEquipo); ?>">
		</td>
		<td>
			<img alt="foto escudo" src="<?php echo ("imagenes/".$fotoEscudo); ?>">
		</td>
	</tr>
</table>

<?php
	$i=0;
	while($row = mysqli_fetch_assoc($result)){
	?>
		<div style="background-color:<?php if($i%2==0)echo ("#D1D1D1"); ?>">
	<?php	echo ($row['nombre']);
		$i++;
		echo ("</div>");
		
	}
?>


	
</body>
</html>