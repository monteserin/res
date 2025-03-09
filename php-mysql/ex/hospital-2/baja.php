<?php
	include "../../../conexion_no_incluida_en_ficheros_por_seguridad.php";
	if(isset($_POST['bajaButton'])){		
		$id = $_POST['id'];
		$sql = "delete from paciente where id=".$id;
		mysqli_query($conexionHospital, $sql);
	}		
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>baja en hospital | Pablo Monteserín</title>
			  <meta name="description" content="Eliminación de un registro utilizando PHP y MySQL">

</head>
	<body style="background-color:#66CDAA">
		<div style="text-align:center; width:18em; margin:auto; border: #FFC0CB 6px groove; padding-left:2em">
			<h1 style="font-family:helvetica; width:3em; margin-left:auto; margin-right:auto">Baja</h1>
			<div>
			<form method="post" action="<?php $PHP_SELF ?>">
							Introduzca el identificador del paciente que desea dar de baja:<br/>
							<select name="id">
								<?php
									$sql = "select * from paciente";
									$result = mysqli_query($conexionHospital, $sql);
									while($row = mysqli_fetch_assoc($result)){
										echo "<option value=".$row['id'].">".$row['nombre']." - ".$row['id']."</option>";
									}

								?>
							</select>
				<input type="submit" value="Dar de baja" name="bajaButton" style="background-color:#7FFFD4; font-weight:bold">
			</form>	
			</div>
			<? include("footer.php"); ?> 
		</div>
	</body>
</html>
