<?php
    session_start();
    include "../../../../../conexion_no_incluida_en_ficheros_por_seguridad.php";
    $id = $_SESSION['id'];
    $texto = $_POST['texto'];
    $arrayDeDestinatarios = $_POST['destinatarios'];
    foreach($arrayDeDestinatarios as $destinatario){
        $sql ="insert into mensaje(remitente, destinatario, mensaje)
                values('$id', '$destinatario','$texto')";
       mysqli_query($conexion_varios, $sql) or die("error");
    }
	header("Location:enviarMensajes.php");
?>
