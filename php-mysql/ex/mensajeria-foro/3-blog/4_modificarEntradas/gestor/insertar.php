<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
<title>Página de introducción de entradas en el blog | Pablo Monteserín</title>
	<meta name="description" content="Página de introducción de entradas en un blog hecho con PHP y MySQL"></head>
<body>
			

	
<?php
	if(isset($_POST['enviar'])){
    include "../../../../conexion_no_incluida_en_ficheros_por_seguridad";
		$sql = "insert into entrada values(null,'".$_POST['titulo']."','".$_POST['texto']."', null)";
		mysqli_query($conexionBlog, $sql) or die($sql);
	}	
?>

<form method="post" action="#">
	<input type="text" name="titulo" /><br/>
	<textarea name="texto"></textarea><br/>
	<input type="submit" name="enviar"/><br/><br/>
</form>

<?php 
	include "volver.php";
?>

</body>
</html>