<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ver hilos en foro PHP | Pablo Monteserín</title>
</head>
<body>

<?php    include "../../../../conexion_no_incluida_en_ficheros_por_seguridad.php";
    $sql = "select * from hilo";
    $result = mysqli_query($conexion_varios, $sql);
    while($row = mysqli_fetch_assoc($result)){
        echo "<a href='verHilos2.php?id_hilo=".$row['id']."'>".$row['nombre_hilo']."</a>";
        echo "<br/><br/>";
    }
?>

	
</body>
</html>
