<?php
    include "../../../../conexion_no_incluida_en_ficheros_por_seguridad";
	$idEntrada = $_GET['idEntrada'];
	$sql = "select * from entrada where id='$idEntrada'";
	$result = mysqli_query($conexionBlog, $sql)or die("error");
	while($row = mysqli_fetch_assoc($result)){
		echo "<h1>".$row['titulo']."</h1>";
		echo $row['texto'];
	}
?>
