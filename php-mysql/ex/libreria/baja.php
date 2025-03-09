<?php
	include ("../../../conexion_no_incluida_en_ficheros_por_seguridad.php");
	if(isset($_POST['bajaButton'])){		
		$id = $_POST['id'];
		$sql = "delete from libro where id='$id'";
		mysqli_query($conexionLibreria, $sql);
	}		
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>librería en PHP - baja | Pablo Monteserín</title>
		  <meta name="description" content="Eliminación mediante código PHP de un registro de la tabla libros utilizándo código SQL contra una tabla de una base de datos MySQL ">

</head>
	<body style="background-color:Khaki">
		<div style="text-align:left; width:20em; margin:auto; border: #FFC0CB 6px groove; padding-right:2em; padding-bottom:2em;padding-left:2em">
			<h1 style="font-family:helvetica; width:3em; margin-left:auto; margin-right:auto">Baja</h1>
			<div>
			<form method="post" action="<?php $PHP_SELF ?>">
							Introduzca el identificador del libro que desea dar de baja:<br/><br/>
							<select name="id">
								<?php
									$sql = "select * from libro";
									$result = mysqli_query($conexionLibreria, $sql);
									while($row = mysqli_fetch_assoc($result)){
										echo "<option value=".$row['id'].">".$row['titulo']."</option>";
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
