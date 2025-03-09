<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>foro en PHP | Pablo Monteserín</title>
 
                <meta name="description" content="Página de visualización de los hilos del foro hecho con PHP y MySQL">

</head>
<body>
	<?php
    include "../../../../conexion_no_incluida_en_ficheros_por_seguridad.php";
	include "footer.php";
	$idHilo = $_REQUEST['idHilo'];
	$sqlHilo= "select hilo.nombreHilo 'nombreHilo', hilo.fecha 'fechaHilo', hilo.textoHilo 'textoHilo', usuarios.nombre 'nombreUsuario' from hilo, usuarios where hilo.idHilo='$idHilo' and usuarios.id=hilo.idUsuario";
	$sqlComentario = "select comentario.comentario 'comentario', comentario.fecha 'fechaComentario', usuarios.nombre 'nombreUsuario' from comentario, usuarios where usuarios.id=comentario.idUsuario and idHilo='$idHilo'";

	
	$resultHilo = mysqli_query($conexion_varios, $sqlHilo) or die("error1");
	$resultComentario = mysqli_query($conexion_varios, $sqlComentario) or die("error2");
	
	$rowHilo = mysqli_fetch_assoc($resultHilo);
		echo "<h1>".$rowHilo['nombreHilo']."</h1>";
		echo "<h5>La fecha en que el hilo fue creado es: ".$rowHilo['fechaHilo']."</h5>";
		echo "<h5>El autor de este hilo es: ".$rowHilo['nombreUsuario']."</h5>";
		echo "<span style='font-weight:bold'>".$rowHilo['textoHilo']."</span>";
		echo "<br/><br/><br/><br/>";

	while($rowComentario = mysqli_fetch_assoc($resultComentario)){
		echo "<h6>Fecha de este comentario: ".$rowComentario['fechaComentario']."</h6>";
		echo "<h6>Autor de este comentario: ".$rowComentario['nombreUsuario']."</h6>";
		echo $rowComentario['comentario'];
		echo "<br/><br/>";
	}
?>
<form method="post" action="verHilos3.php?idHilo=<?php echo $rowHilo['id']?>">
	<textarea name="comentario"></textarea>
	<input type="hidden" name= "idHilo" value="<?php echo $idHilo; ?>" />
	<input type="submit" />
</form>

</body>
</html>