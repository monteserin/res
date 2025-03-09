<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Página de consulta de entradas de un blog hecho con PHP y MySQL</title>
			<meta name="description" content="Página que consulta las entradas de un blog con PHP y MySQL">

</head>
<body>
	<?php
	include "../../../conexion.php";
	$sql = "select * from entrada order by fecha asc";
	$result = mysqli_query($conexionBlog, $sql)or die("error");
	while($row = mysqli_fetch_assoc($result)){
		$idEntrada = $row['id'];
		echo "<a href=\"plantilla.php?idEntrada=$idEntrada\"><h1>".$row['titulo']."</h1></a>";
		echo $row['texto'];
	}
?>

</body>
</html>