<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Página de introducción de entradas en el blog | Pablo Monteserín</title>
	<meta name="description" content="Página de introducción de entradas en un blog hecho con PHP y MySQL">

</head>
<body>

<?php
	if(isset($_POST['enviar'])){
		include "../../../../conexion.php";
		$sql = "insert into entrada values(null,'".$_POST['titulo']."','".$_POST['texto']."', null)";
		mysqli_query($conexionBlog, $sql) or die($sql);
	}	
?>

<form method="post" action="#">
	<input type="text" name="titulo" />
	<textarea name="texto"></textarea>
	<input type="submit" name="enviar"/>
</form>
	
</body>
</html>

