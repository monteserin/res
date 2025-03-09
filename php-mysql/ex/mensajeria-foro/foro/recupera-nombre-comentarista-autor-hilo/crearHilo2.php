<?php
	session_start();
    include "../../../../conexion_no_incluida_en_ficheros_por_seguridad.php";
	$nombre_hilo = $_POST['nombre_hilo'];
	$texto_hilo = $_POST['texto_hilo'];
	$id_usuario = $_SESSION['id'];
	$sql = "insert into hilo values(null, '$texto_hilo', '$nombre_hilo', NOW() , '$id_usuario')";
	//echo $sql;
	mysqli_query($conexion_varios, $sql) or die("error");
	header ("location: menu.html");		

?>

