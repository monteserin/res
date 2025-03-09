<?php session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ver los mensajes del foro | Pablo Monteserín</title>
            <meta name="description" content="Página de visualización de los mensajes de un foro hecho con PHP y MySQL">

</head>
<body>
	<?php
    include "../../../../conexion_no_incluida_en_ficheros_por_seguridad.php";
    $id = $_SESSION['id'];
    $sql = "select mensaje from mensaje where destinatario='$id'";
    $result = mysqli_query($conexion_varios, $sql);
    while($row = mysqli_fetch_assoc($result)){
        echo $row['mensaje'];
        echo "<br/><br/>";
    }
?>

</body>
</html>