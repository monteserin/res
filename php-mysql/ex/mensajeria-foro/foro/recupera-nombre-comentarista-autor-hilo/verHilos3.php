<?php
	session_start();
    include "../../../../conexion_no_incluida_en_ficheros_por_seguridad.php";
	$comentario = $_REQUEST['comentario'];
	$id_hilo = $_REQUEST['id_hilo'];
	
	$sql = "insert into comentario values(null,".$id_hilo.", '".$comentario."', ".$_SESSION['id'].", NOW())";
	mysqli_query($conexion_varios, $sql) or die(mysqli_error($conexion_varios).$sql);
	header ("Location: menu.html");
?>
