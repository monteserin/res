<?php
	include ("../../../conexion_no_incluida_en_ficheros_por_seguridad.php");
	if(isset($_POST['bajaButton'])){
		$nombre = $_POST['combo'];
		$sql = "DELETE FROM invitado WHERE nombre='$nombre'";
		echo $sql;
		mysqli_query($conexionPersonas, $sql) or die("error");
	}		
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>lista de invitados en PHP - baja | Pablo Monteserín</title>
		  <meta name="description" content="Eliminación de un registro de una base de datos  seleccionado en una combo desplegable de una lista de invitados utilizando MySQL">

</head>
	<body style="background-color:pink">
		<div style="text-align:center; width:18em; margin:auto; border: #FFC0CB 6px groove; padding-left:2em">
			<h1 style="font-family:helvetica; width:3em; margin-left:auto; margin-right:auto">Baja</h1>
			<div>
			<form method="post" action="#">
							Introduzca el identificador del invitado que desea dar de baja:<br/>
							<select name="combo">
								<?php
									$sql = "SELECT * FROM invitado";
									$result = mysqli_query($conexionPersonas, $sql);
									while($row = mysqli_fetch_assoc($result)){
										echo "<option value='".$row['nombre']."'>".$row['nombre']."</option>";
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
