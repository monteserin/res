<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<title>Página de modificación de entradas del blog</title>
	<meta name="description" content="En esta página puedes modificar la entrada seleccionada del blog">

</head>
<body>

<?php
    include "../../../../conexion_no_incluida_en_ficheros_por_seguridad";
	if(isset($_POST['enviar'])){
		$sql = "update entrada set titulo ='".$_POST['titulo']."', texto='".$_POST['texto']."' where id='".$_GET['id']."'";
		mysqli_query($conexionBlog, $sql) or die($sql);
	}
	
	$sql = "select * from entrada where id=".$_GET['id'];
	$result = mysqli_query($conexionBlog, $sql);
	$row = mysqli_fetch_assoc($result);
?>
<form method="post" action="#">
	<input name="titulo" type="text" value="<?php echo $row['titulo']?>" /><br/>
	<textarea name="texto" ><?php echo $row['texto']?></textarea>
	<input type="submit" name="enviar"/>
</form>

<?php 
	include "volver.php";
?>


</body>
</html>