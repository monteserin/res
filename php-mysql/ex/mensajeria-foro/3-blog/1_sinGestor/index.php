<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Construcción de un blog con PHP y MySQL que no tiene gestor</title>
	            <meta name="description" content="Página que consulta las entradas de un blog con PHP y MySQL">

</head>
<body>
	<?php
    include "../../../../conexion_no_incluida_en_ficheros_por_seguridad";
	$sql = "select * from entrada order by fecha asc";
	$result = mysqli_query($conexionBlog, $sql)or die("error");
	while($row = mysqli_fetch_assoc($result)){
		echo "<h1>".$row['titulo']."</h1>";
		echo $row['texto'];
	}
?>

</body>
</html>