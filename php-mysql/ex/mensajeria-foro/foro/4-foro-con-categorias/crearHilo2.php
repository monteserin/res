<?php
	session_start();
    include "../../../../conexion_no_incluida_en_ficheros_por_seguridad.php";
	$nombreHilo = $_POST['nombreHilo'];
	$textoHilo = $_POST['textoHilo'];
	$idUsuario = $_SESSION['id'];
	$sql = "insert into hilo values(null, '$textoHilo', '$nombreHilo', null , '$idUsuario')";
	//echo $sql;
	mysqli_query($conexion_varios, $sql) or die("error");
	header ("location: menu.html");		

?>

