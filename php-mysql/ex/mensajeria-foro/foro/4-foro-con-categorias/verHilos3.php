<?php
	session_start();
    include "../../../../conexion_no_incluida_en_ficheros_por_seguridad.php";
	$comentario = $_REQUEST['comentario'];
	$idHilo = $_REQUEST['idHilo'];
	
	$sql = "insert into comentario values(null,".$idHilo.", '".$comentario."', null, ".$_SESSION['id'].")";
	mysqli_query($conexion_varios, $sql) or die("error al ejecutar la consulta");
	header ("Location: menu.html");
?>
