<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ver hilos en foro PHP | Pablo Monteserín</title>
                <meta name="description" content="Página de visualización de los hilos del foro hecho con PHP y MySQL">

</head>
<body>
	
<?php
    include "../../../../conexion_no_incluida_en_ficheros_por_seguridad.php";
	include "footer.php";
	$id_hilo = $_REQUEST['id_hilo'];

	$sqlHilo = "select * from hilo where id='$id_hilo'";
	$sqlComentario = "select * from comentario where id_hilo='$id_hilo'";
echo $sqlComentario;
	$resultHilo = mysqli_query($conexion_varios, $sqlHilo) or die(mysqli_error($conexion_varios));
	$resultComentario = mysqli_query($conexion_varios, $sqlComentario) or die(mysqli_error($conexion_varios));
	
	$rowHilo = mysqli_fetch_assoc($resultHilo);
	
	echo "<h1>".$rowHilo['nombre_hilo']."</h1>";
	echo "<span style='font-weight:bold'>".$rowHilo['texto_hilo']."</span>";
	echo "<br/><br/>";
	while($rowComentario = mysqli_fetch_assoc($resultComentario)){
		echo $rowComentario['comentario'];
		echo "<br/><br/>";
	}
?>
<form method="post" action="verHilos3.php?id_hilo=<?php echo $rowHilo['id']?>">
	<textarea name="comentario"></textarea>
	<input type="submit" />
</form>

</body>
</html>