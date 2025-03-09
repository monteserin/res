<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>mensajería en PHP | Pablo Monteserín</title>        
    <meta name="description" content="Página de envío de los mensajes de un foro hecho con PHP y MySQL">

</head>
<body>
    
    <?php
    include "../../../../../conexion_no_incluida_en_ficheros_por_seguridad";
    $sql = "select * from usuario";
    $result = mysqli_query($conexion_varios, $sql);
    $salida="<form method='post' action='enviarMensajes2.php'><table border='1'><tr><td>Nombre</td><td>Mandar mensaje</td></tr>";
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $salida .= "<tr><td>".$row['nombre']."</td>";
        $salida .= "<td><input type='checkbox'  name='destinatarios[]' value='$id' /></td></tr>";
    }
    $salida .= "</table><textarea name='texto'></textarea><br/><input type='submit'></form>";
    echo $salida;
?>
<a href="menu.html">Volver al menú principal</a>


</body>
</html>