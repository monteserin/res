<?php
	include ("../../../conexion_no_incluida_en_ficheros_por_seguridad.php");
			$id = $_GET['id'];
	
	if(isset($_POST['modificaButton'])){
		
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$dia = $_POST['dia'];
		$mes = $_POST['mes'];
		$ano = $_POST['ano'];
		
		$sql = "update paciente set nombre ='$nombre', apellido='$apellido', fecha_alta='$ano-$mes-$dia' where id='$id'";
		mysqli_query($conexionHospital, $sql)or die($sql);
		
	}
		if(isset($_POST['eliminaButton'])){
		
		$sql = "delete from paciente where id=$id";
		mysqli_query($conexionHospital, $sql)or die($sql);
		header("location:index.html");
		
	}
		$sql = "select * from paciente where id=$id";
		$result = mysqli_query($conexionHospital, $sql);
		$row = mysqli_fetch_assoc($result);
		$nombre = $row['nombre'];
		$apellido = $row['apellido'];
		$fecha_alt = $row['fecha_alta'];
		$fechaExplotada = explode("-", $fecha_alt);	

		$dia = $fechaExplotada[2];
		$mes = $fechaExplotada[1];
		$ano = $fechaExplotada[0];
		
	$sql = "select * from paciente";
	$result = mysqli_query($conexionHospital, $sql);
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>modificación en PHP | Pablo Monteserín</title>
			  <meta name="description" content="Modificación y baja de los campos nombre, apellidos y fecha de los pacientes de un hospital utilizando PHP contra una base de datos MySQL">

</head>
	<body style="background-color:#66CDAA">
		<div style="text-align:center; width:25em; margin:auto; border: #FFC0CB 6px groove; padding-left:2em">
			<h1 style="font-family:helvetica; margin-left:auto; margin-right:auto">Modificación</h1>
			<form name="formulario" method="post">
				
				<table>
					<tr><td>Nombre:</td>
						<td><input type="text" name="nombre" size="30" value="<?php echo $nombre;?>">
						</td>
					</tr>
					<tr><td>Apellidos:
						</td> 
						<td><input type="text" name="apellido" size="30" value="<?php echo $apellido;?>">
						</td>
					</tr>
					<tr><td>Fecha alta:
						</td> 
						<td><input id="fecha" type="text" name="dia" size="2" maxlength="2" value="<?php echo $dia;?>">-
							<input id="fecha" type="text" name="mes" size="2" maxlength="2" value="<?php echo $mes;?>">-
							<input id="fecha" type="text" name="ano" size="4" maxlength="4" value="<?php echo $ano;?>">
						</td>
					</tr>

				</table><br/>
				<input type="submit" value="Actualizar" name="modificaButton" style="background-color:#7FFFD4; font-weight:bold">
				<input type="submit" value="Eliminar" name="eliminaButton" style="background-color:#7FFFD4; font-weight:bold">
			</form>	
			<?php	include ("footer.php");?> 
		</div>
	</body>
</html>
