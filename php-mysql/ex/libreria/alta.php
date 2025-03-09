<?php
	if(isset($_POST['altaButton'])){
		include ("../../../conexion_no_incluida_en_ficheros_por_seguridad.php");
		
		$nombre = $_POST['nombre'];
		$precio = $_POST['precio'];	
		$sql = "insert into libro(nombre, precio) values('$nombre', '$precio')";
		echo $sql;
		mysqli_query($conexionLibreria, $sql);
	}		
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>librería en PHP - alta | Pablo Monteserín</title>
	<meta name="description" content="Insercción de un registro correspondiente a un libro indicando su tiulo y precio en una base da datos MySQL utilizando PHP ">

</head>
	<body style="background-color:Khaki">
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
					<tr>
						<td>
							Precio
						</td>
						<td>
							<input type="text" name="precio">
						</td>
					</tr>		
				</table>
				<input type="submit" value="Dar de alta" name="altaButton" style="background-color:#7FFFD4; font-weight:bold">
			</form>	
			<?php	include ("footer.php");?> 
		</div>

	</body>
</html>

