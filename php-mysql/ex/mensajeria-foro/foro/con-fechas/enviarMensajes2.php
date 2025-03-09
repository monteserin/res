<?php
    session_start();
    include "../../../../../conexion_no_incluida_en_ficheros_por_seguridad.php";
    $arrayDeDestinatarios = $_POST['destinatarios'];
    foreach($arrayDeDestinatarios as $destinatario){
        $sql ="insert into mensaje(remitente, destinatario, mensaje)
                values(".$_SESSION['id'].", ".$destinatario.",'".$_POST['texto']."')";
       echo $sql;
       mysqli_query($conexion_varios, $sql) or die("error");
    }
    echo "<meta http-equiv='Refresh' CONTENT='0; url=enviarMensajes.php'>";
?>
