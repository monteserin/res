<?php
    session_start();
    include "../../../../conexion_no_incluida_en_ficheros_por_seguridad.php";
    $nombre =$_POST['nombre'];
    $password = $_POST['password'];
    $sql = "select * from usuario where nombre='$nombre' and pass='$password'";
    $result = mysqli_query($conexion_varios, $sql);
    $row = mysqli_fetch_assoc($result);
    if(isset($row['nombre'])){
        $_SESSION['id']=$row['id'];
        header('Location: menu.html');
    }
    else{
        echo "<script>alert('datos introducidos incorrectos')</script>";
        echo "<meta http-equiv='Refresh' CONTENT='0; url=index.html'>";
    }
?>
