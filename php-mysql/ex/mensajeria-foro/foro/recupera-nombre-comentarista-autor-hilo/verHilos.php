<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ver hilos en PHP | Pablo Monteserín</title>
            <meta name="description" content="En esta página del foro programado con PHP y MySQL en que se puede ver el nombre del autor de los comentarios publicados">

</head>
<body>

<?php 
    include "../../../../conexion_no_incluida_en_ficheros_por_seguridad.php";
    $sql = "select * from hilo";
    $result = mysqli_query($conexion_varios, $sql);
    while($row = mysqli_fetch_assoc($result)){
        echo "<a href='verHilos2.php?id_hilo=".$row['id']."'>".$row['nombre_hilo']."</a>";
        echo "<br/><br/>";
    }
?>

	
</body>
</html>
