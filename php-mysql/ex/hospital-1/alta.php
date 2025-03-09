<?php
	if(isset($_POST['altaButton'])){
		include ("../../../conexion_no_incluida_en_ficheros_por_seguridad.php");
		
		$nombre = $_POST['nombre'];
		$apellidos = $_POST['apellidos'];
		$sql = "insert into paciente(nombre, apellido) values('$nombre', '$apellidos')";
		mysqli_query($conexionHospital, $sql)or die($sql);
	}		
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>alta registro futbol en PHP | Pablo Monteserín</title>
			  <meta name="description" content="Insercción de un registro correspondiente a un paciente (con su nombre y apellidos) en una base de datos MySQL utilizando PHP">

</head>
</head>
	<body style="background-color:#66CDAA">
		<div style="text-align:center; width:18em; margin:auto; border: #FFC0CB 6px groove; padding-left:2em">
			<h1 style="font-family:helvetica; width:3em; margin-left:auto; margin-right:auto">Ingreso</h1>
			<form method="post" action="<?php $PHP_SELF ?>" accept-charset="UTF-8">
				<table style="margin-bottom:1em;">
					<tr>
						<td>
							Nombre: 
						</td>
						<td>
							<input type="text" name="nombre" style="width:180px">
						</td>
					</tr>
					<tr>
						<td>
							Apellidos: 
						</td>
						<td>
							<input type="text" name="apellidos" style="width:180px">
						</td>
					</tr>
				</table>
				<input type="submit" value="Dar de alta" name="altaButton" style="background-color:#7FFFD4; font-weight:bold">
			</form>	
			<?php	include ("footer.php");?> 
		</div>

	</body>
</html>

