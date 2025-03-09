<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>mensajería en PHP | Pablo Monteserín</title>
            <meta name="description" content="Página de login de visualización de los mensajes de un foro hecho con PHP y MySQL">

</head>
<body>
  <?php
    include "../../../../../conexion_no_incluida_en_ficheros_por_seguridad.php";
    $id = $_SESSION['id'];
    $sql = "select mensaje, nombre from mensaje, usuario where destinatario='$id' and usuario.id=mensaje.remitente";
    echo $sql;
    $result = mysqli_query($conexion_varios, $sql);
    while($row = mysqli_fetch_assoc($result)){
            echo "<h6>autor del mensaje: ".$row['nombre']."</h6>";       
        echo $row['mensaje'];
        echo "<br/><br/>";
    }
?>  
</body>
</html>

