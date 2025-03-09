<?php
include ("../../../conexion_no_incluida_en_ficheros_por_seguridad.php");

if(isset($_POST['modificaButton'])){

	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$dia = $_POST['dia'];
	$mes = $_POST['mes'];
	$ano = $_POST['ano'];

	$sql = "update paciente set nombre ='$nombre', apellido='$apellido', fecha_alta='$ano-$mes-$ano' where id='$id'";

	mysqli_query($conexionHospital, $sql)or die($sql);

}else if(isset($_POST['id'])){
	$id = $_POST['id'];	
$sql = "select * from paciente where id=".$id;
$result = mysqli_query($conexionHospital, $sql);
$row = mysqli_fetch_assoc($result);
$nombre = $row['nombre'];
$apellido = $row['apellido'];
$fecha_alt = $row['fecha_alta'];
$fechaExplotada = explode("-", $fecha_alt);	
$dia = $fechaExplotada[2];
$mes = $fechaExplotada[1];
$ano = $fechaExplotada[0];
}



$sql = "select * from paciente";
$result = mysqli_query($conexionHospital, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>modificación registro en PHP | Pablo Monteserín</title>
			  <meta name="description" content="Selección y modificación de tres campos de un registro de una base de datos MySQL de los pacientes de un hospital utilizando PHP">

</head>
<body style="background-color:#66CDAA">
	<div style="text-align:center; width:25em; margin:auto; border: #FFC0CB 6px groove; padding-left:2em">
		<h1 style="font-family:helvetica; margin-left:auto; margin-right:auto">Modificación</h1>
		<form name="formulario" method="post" action="<?php $PHP_SELF ?>">
			Introduzca el identificador del paciente que desea modificar:<br/>
			<select name="id" onchange="formulario.submit();">
				<?php
				echo "<option>Seleccione una opción, por favor</option>";
				while($row = mysqli_fetch_assoc($result)){
					echo "<option ";
					if($id == $row["id"])echo " selected ";
					echo "value=".$row['id'].">".$row['nombre']." - ".$row['id']."</option>";						
				}

				?>
			</select>
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

</form>	
<?php	include ("footer.php");?> 
</div>
</body>
</html>
