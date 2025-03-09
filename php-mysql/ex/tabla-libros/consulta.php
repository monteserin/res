<?php
	include "../../../conexion_no_incluida_en_ficheros_por_seguridad.php";
	$sql = "select * from libro";
	$result = mysqli_query($conexionLibreria, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>consulta tabla libros en PHP | Pablo Monteserín</title>
                <meta name="description" content="Ejemplo de consulta SQL a los campos id, título y precio de la tabla libros de la base de datos MySQL utilizando PHP">

</head>
<body>
<h1>Consulta de una base de datos usando PHP con MySQL</h1>

<table border="1">
	<tr><th>id</th><th>titulo</th><th>precio</th></tr>
<?php
	while($row = mysqli_fetch_assoc($result)){
?>
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
</table>


	
</body>
</html>