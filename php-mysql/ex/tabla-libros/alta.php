<?php
	include "../../../conexion_no_incluida_en_ficheros_por_seguridad.php";
	if(isset($_POST['anadir'])){
	$sql = "insert into libro(titulo, precio) values('".$_POST['titulo']."', '".$_POST['precio']."')";
		mysqli_query($conexionLibreria, $sql);
	}
	$sql = "select * from libro";
	$result = mysqli_query($conexionLibreria, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<h1>Documento PHP que se encarga de insertar libros en una base de datos</h1>
	<meta charset="UTF-8">
	<title>alta tabla libros en PHP | Pablo Monteserín</title>
                <meta name="description" content="Insercción de un registro en una tabla de libros en una base de datos MySQL. A este ejemplo iremos añadiendo funcionalidades: baja y modificación">

</head>
<body>
	

<table border="1">
	<tr><td>id</td><td>titulo</td><td>precio</td><td>opcion</td></tr>
<?php
	while($row = mysqli_fetch_assoc($result)){
?>
<form method="post" action="#">
	<tr>
		<td>
		<?php echo $row['id']; ?>
		</td>
		<td>
			<?php echo $row['titulo']; ?>
		</td>
		<td>
			<?php echo $row['precio']; ?>
		</td>
	</tr>
<?php

	}
?>

	<tr>
		<td style="background:grey"></td>
		<td><input type="text" name="titulo"></td>
		<td><input type="text" name="precio"></td>
		<td><input type="submit" name="anadir" value="Agregar"></td>
	</tr>
</form>
</table>



</body>
</html>