<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<?php
	include ("../../../conexion_no_incluida_en_ficheros_por_seguridad.php");

	if(isset($_POST['modificaButton'])){
		
		$id = $_POST['id'];
		$nombre = $_POST['nombre'];
		$precio = $_POST['precio'];
		
		$sql = "update libro set nombre ='".$nombre."', precio='".$precio."' where id=".$id.";";
				echo $sql;

		mysqli_query($conexionLibreria, $sql) or die("hubo un error al ejecutar la consulta");
		
	}else{ 
		if(!isset($_POST['id'])){
			$sql = "select min(id) from libro";	
			$result = mysqli_query($conexionLibreria, $sql);
			$row = mysqli_fetch_assoc($result);
			$id = $row['min(id)'];
		}else{
			$id = $_POST["id"];	
		}
		$sql = "select * from libro where id='$id'";
		$result = mysqli_query($conexionLibreria, $sql);
		$row = mysqli_fetch_assoc($result);
		$nombre = $row['nombre'];
		$apellidos = $row['precio'];
	}	
	$sql = "select * from libro";
	$result = mysqli_query($conexionLibreria, $sql);
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>modificación en PHP - modificación | Pablo Monteserín</title>
	<meta name="description" content="Modificación de un registro correspondiente a una tabla de libros de una base de datos MySQL utilizando código PHP tras haberlo seleccionado en una combo">

</head>
	<body style="background-color:Khaki">
		<div style="text-align:center; width:25em; margin:auto; border: #FFC0CB 6px groove; padding-left:2em">
			<h1 style="font-family:helvetica; margin-left:auto; margin-right:auto">Modificación</h1>
			<form name="formulario" method="post" action="<?php $PHP_SELF ?>">
					<p style="text-align:left">Introduzca el título del libro que desea modificar:</p>
							<select name="id" onchange="formulario.submit();">
								<?php
									
									while($row = mysqli_fetch_assoc($result)){
										echo "<option ";
										if($id == $row["id"])echo " selected ";
										echo "value=".$row['id'].">".$row['titulo']."</option>";						
									}

								?>
							</select>
				<table>
					<tr><td>Título:</td>
						<td><input type="text" name="nombre" size="30">
						</td>
					</tr>
					<tr><td>Precio:
						</td> 
						<td><input type="text" name="precio" size="30">
						</td>
					</tr>
				</table><br/>
				<input type="submit" value="Actualizar" name="modificaButton" style="background-color:#7FFFD4; font-weight:bold">

			</form>	
			<?php	include ("footer.php");?> 
		</div>
	</body>
</html>
