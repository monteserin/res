<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ver hilos en PHP | Pablo Monteserín</title>
                <meta name="description" content="Página de visualización de los hilos del foro hecho con PHP y MySQL">

</head>
<body>
	<?php
    include "../../../../conexion_no_incluida_en_ficheros_por_seguridad.php";
	include "footer.php";
	$id_hilo = $_REQUEST['id_hilo'];
	$sqlHilo= "select hilo.nombre_hilo 'nombre_hilo', hilo.fecha 'fecha', hilo.texto_hilo 'texto_hilo', usuario.nombre 'nombre' from hilo, usuario where hilo.id='$id_hilo' and usuario.id=hilo.id_usuario";
	$sqlComentario = "select comentario.comentario 'comentario', comentario.fecha 'fecha', usuario.nombre 'nombre_usuario' from comentario, usuario where usuario.id=comentario.id_usuario and id_hilo='$id_hilo'";

	$resultHilo = mysqli_query($conexion_varios, $sqlHilo) or die(mysqli_error($conexion_varios));
	$resultComentario = mysqli_query($conexion_varios, $sqlComentario) or die(mysqli_error($conexion_varios));
	
	$rowHilo = mysqli_fetch_assoc($resultHilo);
		echo "<h1>".$rowHilo['nombre_hilo']."</h1>";
		echo "<h5>La fecha en que el hilo fue creado es: ".$rowHilo['fecha']."</h5>";
		echo "<h5>El autor de este hilo es: ".$rowHilo['nombre']."</h5>";
		echo "<span style='font-weight:bold'>".$rowHilo['texto_hilo']."</span>";
		echo "<br/><br/><br/><br/>";

	while($rowComentario = mysqli_fetch_assoc($resultComentario)){
		//echo "<h6>Fecha de este comentario: ".$rowComentario['fechaComentario']."</h6>";
		echo "<h6>Autor de este comentario: ".$rowComentario['nombre_usuario']."</h6>";
		echo $rowComentario['comentario'];
		echo "<br/><br/>";
	}
?>
<form method="post" action="verHilos3.php">
	<textarea name="comentario"></textarea>
	<input type="hidden" name= "id_hilo" value="<?php echo $id_hilo; ?>" />
	<input type="submit" />
</form>

</body>
</html>
