<?php
	session_start();
    include "../../../../../conexion_no_incluida_en_ficheros_por_seguridad.php";
	
	$sql = "insert into hilo set nombre_hilo='".$_POST['nombre_hilo']."', texto_hilo='".$_POST['texto_hilo']."', fecha=NOW()";
	echo $sql;
	mysqli_query($conexion_varios, $sql);
	header ("location: menu.html");		

?>

