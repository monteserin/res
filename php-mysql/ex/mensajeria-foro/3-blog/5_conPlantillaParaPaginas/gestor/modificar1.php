<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<title>Página de selección de la entrada a modificar</title>
	<meta name="description" content="En esta página puedes seleccionar la entrada que quieres modificar">
	
</head>
<body>

	
<?php
    include "../../../../conexion_no_incluida_en_ficheros_por_seguridad";
	$sql = "select * from entrada";
	$result = mysqli_query($conexionBlog, $sql);
	while($row = mysqli_fetch_assoc($result)){
?>
	<a href="modificar2.php?id=<?php echo $row['id']; ?>"><?php echo $row['titulo']; ?></a>
<?php
	}
?>
<?php 
	include "volver.php";
?>

</body>
</html>