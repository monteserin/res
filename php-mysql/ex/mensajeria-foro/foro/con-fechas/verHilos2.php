<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ver hilos en foro PHP | Pablo Monteserín</title>
	                <meta name="description" content="Página de visualización de los hilos del foro hecho con PHP y MySQL">

</head>
<body>
<?php
    include "../../../../../conexion_no_incluida_en_ficheros_por_seguridad.php";
	include "footer.php";
	$id_hilo = $_REQUEST['id_hilo'];

	$sqlHilo = "select * from hilo where id=".$id_hilo;
	$sqlComentario = "select * from comentario where id_hilo=".$id_hilo;

	$resultHilo = mysqli_query($conexion_varios, $sqlHilo);
	$resultComentario = mysqli_query($conexion_varios, $sqlComentario);
	
	$rowHilo = mysqli_fetch_assoc($resultHilo);
	
	echo "<h1>".$rowHilo['nombre_hilo']."</h1>";
	echo "<h5>La fecha en que el hilo fue creado es: ".$rowHilo['fecha']."</h5>";
	echo "<span style='font-weight:bold'>".$rowHilo['texto_hilo']."</span>";
	echo "<br/><br/><br/><br/>";
	while($rowComentario = mysqli_fetch_assoc($resultComentario)){
		echo "<h6>Fecha de este comentario: ".$rowComentario['fecha']."</h6>";
		echo $rowComentario['comentario'];
		echo "<br/><br/>";
	}
?>
<form method="post" action="verHilos3.php?idHilo=<?php echo $rowHilo['id']?>">
	<textarea name="comentario"></textarea>
	<input type="hidden" name="id_hilo" value="<?= $id_hilo?>">
	<input type="submit" />
</form>
	
</body>
</html>
