<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//ES"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="ES" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Practica 1 Ball Board</title>
<meta name="description" content="Ejercicio de PHP en el que debemos introducir diferentes algoritmos para determinar la fotografía correcta que debemos ubicar en una casilla">

</head>
<body>
	<h1>Ejercicio de programación de algoritmos con PHP</h1>
	<div>
		<?php

		/************* FUNCTION *************/
	//function code

		function LF()
	{ //line feed
		print "<br />";
	}
	
	
		function putImg($l){
		$l=strtoupper($l);
		echo '<img src="'.$l.'.png" />';
	}
	
	function isImgCode($l){
		$l=strtoupper($l);
		if($l=="B"||$l=="G"||$l=="R"||$l=="Y"){
			return true;
		}
		else return false;
	}
	
	/************* MAIN *************/
	//main code	
	
	$filename = $_GET["filename"];
	include($filename);
	$numCell=0;
	$i=0;
	$j=0;
	do{
		$l=substr($cadena, $i,1);
		if($i==0){
			$numCell=$l;
		}else{
			if(isImgCode($l)){
				$l2 = substr($cadena, $i+1,1);
				if(isImgCode($l2)){
					if($l!=$l2){
						putImg($l.$l2);
						$i++;

					}else{
						putImg($l);
					}
				}else{
						putImg($l);
					}

			}else{
				putImg("E");
			}

			if($j%($numCell)==0){
				LF();
				//echo ($numCell+1);
			}
		}
		//echo $j;
		$j++;
		$i++;
	}while($i<strlen($cadena)-1);



	?>
</div>
</body>
</html>