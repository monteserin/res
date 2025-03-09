<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio Login con PHP | Pablo Monteserín</title>
	<meta name="description" content="Ejemplo de como codificar con PHP un sencillo login que lanza una consulta SQL a una base de datos para ver si existe un usuario con ese nombre y contraseña">

</head>
<body>
<h1>Programación de un login utilizando PHP contra una base de datos MySQL</h1>


<?php
if(isset($_POST['login']) && $_POST['login']=="Log in"){
                    include ("../../../../conexion_no_incluida_en_ficheros_por_seguridad.php");
	$sql = "select * from usuario where nombre='".$_POST['nombre']."' and pass='".$_POST['pass']."'";
	echo $sql;
        $result = mysqli_query($conexion_varios, $sql);
	$row = mysqli_fetch_assoc($result);

	if(isset($row)){
		$_SESSION['idSesion'] = session_id();
		echo "<meta http-equiv='refresh' content='0; URL=pagina2.php'>";
	}else{
		echo "<script>alert('Nombre de usuario o contraseña incorrectos')</script>";
	}
}
?>
<script>
function logOut(){
	document.location.href='sessiondestroy.php'	
}
</script>
<h2>El usuario es pp y la pass es pp</h2>
<form method="post" action="#">
	Nombre<input type="text" name="nombre"><br/>
	Password<input type="password" name="pass"><br/>
	<input type="submit" name="login" value="Log in">
	<a href="sessiondestroy.php">Destruir sesión</a>
</form>
<a href="pagina2.php">Ir a página2.php</a>

</body>
</html>