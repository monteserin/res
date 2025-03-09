<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//ES"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="ES" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Practica Números primos</title>
<meta name="description" content="Ejercicio de PHP aplicaremos diferentes algoritmos y funciones para mostrar una serie de números primos por pantalla">
	
</head>
<body>
	<h1>Ejercicio números primos con PHP</h1>
<div>
<?php
   	
	/************* FUNCTION *************/
	//Aquí va el codi de les funcions

	function LF()
	{ //line feed
		print "<br />";
	}
	
	

	/************* MAIN *************/
	//Aquí va el codi del programa principal	
	
	$filename = $_GET["filename"];
	include($filename);
	$data = explode(" ",$cadena);
	
	 for($i=0; $i<count($data); $i++){
        if(isPrime($data[$i])){
            echo $data[$i].LF();
        }
    }

function isPrime($num) {
    if($num == 1)
        return false;
    if($num == 2)
        return true;
    if($num % 2 == 0) {
        return false;
    }
    for($i = 3; $i <= ceil(sqrt($num)); $i = $i + 2) {
        if($num % $i == 0)
            return false;
    }
    return true;
}
		
?>
</div>
</body>
</html>