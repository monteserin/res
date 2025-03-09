<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>enviar mensajes en PHP | Pablo Monteserín</title>
            <meta name="description" content="Página de envío de mensajes de un foro hecho con PHP y MySQL">

</head>
<body>
<?php
                    include ("../../../../conexion_no_incluida_en_ficheros_por_seguridad.php");
    $sql = "select * from usuario";
    $result = mysqli_query($conexion_varios, $sql);
    $salida='<form method="post" action="enviarMensajes2.php"><select name="destinatario">';
    while($row = mysqli_fetch_assoc($result)){
    	$id = $row['id'];
        $salida .= '<option value="'.$row['id'].'">'.$row['nombre'].'</option>';
    }
    $salida .= "</select><br><textarea name='texto'></textarea><br/><input type='submit'></form>";
    echo $salida;
?>
<a href="menu.html">Volver al menú principal</a>

</body>
</html>