<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login con PHP | Pablo Monteserín</title>
		<meta name="description" content="Login en PHP que consultará una tabla de usuarios de una base de datos MySQL y creará una variable de sesión en el caso de haya coincidencia">

</head>
<body>
<h1>Impresión de la ID de sesión con PHP</h1>
<?php 
 $_SESSION['sid'] = session_id();
 echo $_SESSION['sid'];
?>
<br/><br/><a href="pagina2.php">Ir a pagina 2</a>




</body>
</html>