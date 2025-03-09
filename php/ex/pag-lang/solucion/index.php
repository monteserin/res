<?php 
session_start();

if(isset($_GET['lang'])){
	$_SESSION['lang']= $_GET['lang'];
}else if(!isset($_SESSION['lang'])){
	$_SESSION['lang'] = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
}
if(in_array($_SESSION['lang'], array("es", "en"))){
	include "langs/".$_SESSION['lang'].".php";	
}else{
	include "langs/es.php";
}


$p = "home";
if(isset($_REQUEST["p"])){
	$p = $_REQUEST["p"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>página con idiomas en PHP | Pablo Monteserín</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="css/estilos.css">
	<meta name="viewport" content="width= device-width , initial-scale=1.0 , user-scalable=no "/>
		  <meta name="description" content="Ejemplo de una página web con formulario de contacto, plantilla y multi idioma codificada con PHP">
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" media="screen" href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h1 id="title">Mi página web</h1>
			</div>
		</div>
		<div class="row">
			<div id="colLeft" class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
				<ul class="menu">
					<li><a href="index.php?p=home"><?=$homeLink ?></a></li>
					<li><a href="index.php?p=contact"><?=$contactLink ?></a></li>

				</ul>
<div class="lang">
				<a href="index.php?p=<?=$p ?>&lang=es">ES</a> | <a href="index.php?p=<?=$p ?>&lang=en">EN</a>
				</div>
			</div>
			<div id="colRight" class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
				<?php include $p.".php"; ?>				
			</div>
		</div>
	</div>
</body>
</html>