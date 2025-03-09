<?php
	session_start();
    include "../../../../conexion_no_incluida_en_ficheros_por_seguridad.php";
	$nombre_hilo = $_POST['nombre_hilo'];
	$texto_hilo = $_POST['texto_hilo'];
	$sql = "insert into hilo set nombre_hilo='$nombre_hilo', texto_hilo='$texto_hilo'";
	
	mysqli_query($conexion_varios, $sql);
	header ("location: menu.html");		

?>

