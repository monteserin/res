<?php
	if(isset($_POST['altaButton'])){
		include ("../../../conexion.php");
		
		$nombre = $_POST['nombre'];
		$sql = "INSERT INTO invitado VALUES('$nombre')";
		mysqli_query($conexionPersonas, $sql) or die('error');
	}		
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>lista de invitados en PHP - alta | Pablo Monteserín</title>
	<meta name="description" content="Alta de un registro correspondiente a un invitado con un único campo (su nombre) en una base de datos MySQL y utilizando PHP">

</head>
	<body style="background-color:pink">
		<div style="text-align:center; width:18em; margin:auto; border: #FFC0CB 6px groove; padding-left:2em">
			<h1 style="font-family:helvetica; width:3em; margin-left:auto; margin-right:auto">Alta</h1>
			<form method="post" action="#" accept-charset="UTF-8">
				<table style="margin-bottom:1em;">
					<tr>
						<td>
							Nombre
						</td>
						<td>
							<input type="text" name="nombre">
						</td>
					</tr>
				</table>
				<input type="submit" value="Dar de alta" name="altaButton" style="background-color:#7FFFD4; font-weight:bold">
			</form>	
			<?php	include ("footer.php");?> 
		</div>

	</body>
</html>

