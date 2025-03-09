<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>foro en PHP | Pablo Monteserín</title>
                <meta name="description" content="Página de login al foro hecho con PHP y MySQL">
</head>
<body>

    <?php 
    include "../../../../conexion_no_incluida_en_ficheros_por_seguridad.php";
    $sql = "select * from usuario where nombre='".$_POST['nombre']."' and pass='".$_POST['password']."'";
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

    
</body>
</html>
