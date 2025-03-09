<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio login con PHP, pagina 2</title>
	<meta name="description" content="Para ver el contenido de esta página web, el usuario debe haberse logueado primero">

</head>
<body>
<h1>Página con contenido restringido usando PHP</h1>


<?php
if(!isset($_SESSION['idSesion'])){
	echo "Debe loguearse primero<br/>";	
}else{
	echo "usuario logueado<br/>";
	echo $_SESSION['idSesion'];
}
?>

<br/><a href="login.php">Ir a página de login</a>

</body>
</html>