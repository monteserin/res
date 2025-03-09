<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio bolas con PHP | Pablo Monteserín</title>

	<meta name="description" content="Ejercicio de PHP en el que debemos introducir diferentes algoritmos para determinar la posición que ocupará una imagen en una regilla">


</head>
<body>
<h1>Ejercicio de bolas en PHP</h1>
	<?php 

$initx=$_GET["initx"];
$inity=$_GET["inity"];
$xspeed=$_GET["xspeed"];
$yspeed=$_GET["yspeed"];
$posx=$initx;
$posy=$inity;

$position="";
$primeraPasada=true;
do{
	if($posx>=6 || $posx<=1){
		$xspeed=-$xspeed;
	}
	if($posy>=5 || $posy<=1){
		$yspeed=-$yspeed;
	}
	$posx=$posx+$xspeed;
	$posy=$posy+$yspeed;

	if($primeraPasada){
		$position="Init";
		$primeraPasada=false;
	}else{
		$position="Actual";
	}
		echo '<img alt="bola de ejercicio PHP" src="'.$posx.$posy.'.png">'.$position.' position ('.$posx.','.$posy.'); Init speed('.$initx.','.$inity.')<br/>';


}while($posx!=$initx || $posy!=$inity);

 ?>
</body>
</html>