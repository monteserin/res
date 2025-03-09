<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Página de borrado de entradas en el blog | Pablo Monteserín</title>
	<meta name="description" content="Página de borrado de entradas en un blog hecho con PHP y MySQL">
</head>
<body>
		


<?php
    include "../../../../conexion_no_incluida_en_ficheros_por_seguridad";
	if(isset($_POST['enviar'])){
		$arrayDeValores = $_POST['arrayDeValores'];
		$cadenaDeValores = implode(",",$arrayDeValores);
		$sql ="delete from entrada where id in(".$cadenaDeValores.")";
		mysqli_query($conexionBlog, $sql) or die($sql);
	}
	
	$sql = "select * from entrada";
	$result = mysqli_query($conexionBlog, $sql) or die($sql);
		
?>

<form method="post" action="#">
	<?php
		while($row = mysqli_fetch_assoc($result)){
		echo "<input type='checkbox' name='arrayDeValores[]' value='".$row['id']."' />".$row['titulo']."</br>";
	}
	?>
	<input type="submit" name="enviar"/><br/><br/>
</form>

<?php 
	include "volver.php";
?>

</body>
</html>