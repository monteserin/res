<?php 
session_start();
?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login con PHP, página 2 | Pablo Monteserín</title>
		<meta name="description" content="Página 2 de un login con PHP en el que mostramos el identificador de la sesión iniciado en la página anterior en la que el usuario se logueó">

</head>
<body>
	<h1>En esta página de PHP mostramos el id de sesión definido en otra página de PHP</h1>
	<?php echo $_SESSION['sid']."</br>"; ?>
</body>
</html>