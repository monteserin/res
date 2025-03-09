<?php 

$lang = "es";
if(isset($_REQUEST["lang"])){
	$lang = $_REQUEST["lang"];

}
include "langs/".$lang.".php";

$p = "contenido1";
if(isset($_REQUEST['p'])){
	$p = $_REQUEST['p'];
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ejercicio plantilla con idiomas en PHP | Pablo Monteserín</title>
			<meta name="description" content="Ejemplo de plantilla básica hecha con PHP para cargar contenido en su interior y con multi idiomas">

	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" media="screen" href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h1>Cargar dinámicamente contenido en una web con la instrucción include de PHP</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
				<a href="index.php?p=contenido1">Contenido 1</a><br>
				<a href="index.php?p=contenido2">Contenido 2</a>
				<hr>
				<hr><hr>
				<a href="index.php?lang=es">ES</a> | <a href="index.php?lang=en">EN</a>
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