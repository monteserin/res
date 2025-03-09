<?php
    include "../../../../conexion_no_incluida_en_ficheros_por_seguridad.php";
	$comentario = $_REQUEST['comentario'];
	$id_hilo = $_REQUEST['id_hilo'];
	$id_usuario = $_SESSION['id'];
	$sql = "insert into comentario values(null,'$id_hilo', '$comentario')";
	mysqli_query($conexion_varios, $sql) or die(mysqli_error($conexion_varios));
	header ("Location: menu.html");
?>
