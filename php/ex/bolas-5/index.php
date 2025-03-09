<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//ES"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="ES" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Ejercicio con Bolas en PHP | Pablo Monteserín</title>
<meta name="description" content="Ejercicio de PHP en el que debemos introducir diferentes algoritmos para determinar la fotografía correcta que debemos ubicar en una casilla">

</head>
<body>
	<h1>Ejercicio con imágenes de bolas usando PHP</h1>
	<div>
		<?php

		/************* FUNCTION *************/
	//Aquí va el codi de les funcions

		function LF()
	{ //line feed
		print "<br />";
	}
	
	function putImg($l){
		$l=strtoupper($l);
		echo '<img src="'.$l.'.png" alt="foto bolas" />';
	}

	function colorToValue($c){
		switch ($c) {
			case 'B':
			return 0;
			break;
			case 'R':
			return 1;
			break;case 'G':
			return 2;
			break;case 'Y':
			return 3;
			break;case 'BG':
			return 4;
			break;case 'RG':
			return 5;
			break;case 'GY':
			return 6;
			break;case 'GB':
			return 7;
			break;case 'BY':
			return 8;
			break;case 'YR':
			return 9;
		}
	}
	/************* MAIN *************/
	//Aquí va el codi del programa principal	
	
	$filename = $_GET["filename"];
	include($filename);
	$data = explode(" ", $cadena);
	$num="";
	$total=0;
	for($i=0; $i<count($data); $i++){
		$l = $data[$i];
		if($l=="E"){
			$total+=$num;
			echo " - Value = ".$num."<br/>";
			$num="";
		}
		else if($l!="."){
			$num.=colorToValue($l);
			putImg($l);
		}
	}
	echo "<br/>".$total;
	
	

	?>
</div>
</body>
</html>