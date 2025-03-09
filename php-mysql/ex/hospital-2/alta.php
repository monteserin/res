<?php
	if(isset($_POST['altaButton'])){
		include ("../../../conexion_no_incluida_en_ficheros_por_seguridad.php");
		
		$nombre = $_POST['nombre'];
		$apellidos = $_POST['apellidos'];
		$dia = $_POST['dia'];
		$mes = $_POST['mes'];
		$ano = $_POST['ano'];		
		$sql = "insert into paciente(nombre, apellido, fecha_alta) values('$nombre', '$apellidos', '$ano-$mes-$dia')";
		mysqli_query($conexionHospital, $sql)or die($sql);
	}		
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>alta en hospital | Pablo Monteserín</title>
			  <meta name="description" content="Alta de un registro con los campos nombre, apellidos y fecha de ingreso en una base de datos MySQL de pacientes  utilizando una consulta PHP">

</head>
	<body style="background-color:#66CDAA">
		<div style="text-align:center; width:500px; margin:auto; border: #FFC0CB 6px groove; padding-left:2em">
			<h1 style="font-family:helvetica; width:3em; margin-left:auto; margin-right:auto">Ingreso</h1>
			<form method="post" action="<?php $PHP_SELF ?>" accept-charset="UTF-8">
				<table style="margin-bottom:1em;">
					<tr>
						<td>
							Nombre
						</td>
						<td>
							<input type="text" name="nombre">
						</td>
					</tr>
					<tr>
						<td>
							Apellidos
						</td>
						<td>
							<input type="text" name="apellidos">
						</td>
					</tr>
					<tr>
						<td>
							Fecha ingreso
						</td>
						<td>
							<input id="fecha" type="text" name="dia" size="2" maxlength="2">-
							<input type="text" name="mes" size="2" maxlength="2">-
							<input type="text" name="ano" size="4" maxlength="4">
						</td>
					</tr>		
				</table>
				<input type="submit" value="Dar de alta" name="altaButton" style="background-color:#7FFFD4; font-weight:bold">
			</form>	
			<?php	include ("footer.php");?> 
		</div>

	</body>
</html>

