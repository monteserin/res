<?php 
session_start();

if(isset($_REQUEST["lang"])){
	$_SESSION["lang"] = $_REQUEST["lang"];
	setcookie("lang", $_REQUEST["lang"], time()+3600);
}else if(isset($_COOKIE["lang"])){
	$_SESSION["lang"] = $_COOKIE["lang"];
}else if(!isset($_SESSION["lang"])){
	$_SESSION['lang'] = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
}
if(!in_array($_SESSION['lang'], array("es", "en"))){
$_SESSION['lang']="en";
}



include "langs/".$_SESSION["lang"].".php";







$p = "contenido1";
if(isset($_REQUEST['p'])){
	$p = $_REQUEST['p'];
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>plantilla con idiomas en PHP | Pablo Monteserín</title>
			<meta name="description" content="Ejemplo de plantilla con multidiomas hecha con PHP que usa cookies para almacenar el idioma seleccionado para la próxima sesión">

	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" media="screen" href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>
<h1>Carga dinámica de contenido en función de un idioma utilizando PHP</h1>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				CABECERA
			</div>
		</div>

		<div class="row">
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
				<a href="index.php?p=contenido1">Contenido 1</a><br>
				<a href="index.php?p=contenido2">Contenido 2</a>
				<hr>
				<hr><hr>
				<a href="index.php?p=<?=$p ?>&lang=es">ES</a> | <a href="index.php?p=<?=$p ?>&lang=en">EN</a>
			</div>
			<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
				<?php 
					include $p.".php";
				 ?>
				</div>
		</div>
	</div>
</body>
</html>