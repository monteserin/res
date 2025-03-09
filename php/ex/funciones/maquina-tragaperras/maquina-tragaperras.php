<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>máquina tragaperras en PHP | Pablo Monteserín</title>
			  <meta name="description" content="Ejemplo de programación de una máquina tragaperras utilizando código PHP. La cantidad de dinero será introducida por la url utilizando el parámetro capital">

	<style>
	span{display: inline-block;width:200px;}
	</style>
</head>
<body>
<h1>Máquina tragaperras con PHP</h1>
	<p>Hay que enviar el parámetro capital</p>


<?php 
$capitalinicial = $_REQUEST['capital'];
echo "<h3><span>Capital inicial: </span>".$capitalinicial."</h3>";
$capital = $capitalinicial;
echo $capital."<br/><br/>";
$i=0;
while($capital>0 && $capital<2*$capitalinicial){
	$i++;
	$n1 = rand(0,8);
	$n2 = rand(0,8);
	$n3 = rand(0,8);
	$apuesta = ceil($capital*0.5);
		echo "<br/><span>Número jugada: </span>".$i. "<br/><span>Capital antes de jugar: </span>". $capital."<br/><span>Apuesta: </span>".$apuesta."<br/>";

	echo ' <img src="'.$n1.'.png" alt="imagen máquina tragaperras" >';
	echo ' <img src="'.$n2.'.png" alt="imagen máquina tragaperras">';
	echo ' <img src="'.$n3.'.png" alt="imagen máquina tragaperras">';

	if($n1 ==7 && $n2 == 7 && $n3 == 7){
		$apuesta *=100;
	}else if($n1 == $n2 && $n2 == $n3){
		$apuesta *=6;
	}else if(($n1 == 7 && $n2 == 7) || ($n1 == 7 && $n3 == 7) || ($n2 == 7 || $n3 == 7)){
		$apuesta *=4;
	}else if($n1==$n2 || $n1 == $n3 || $n2 == $n3){
		$apuesta *=2;
	}else{
		$apuesta = -$apuesta;
	}
	$capital += $apuesta;
	echo "<br/><span>Ganancia: </span>".$apuesta."<br/><span>Capital depués de jugar: </span>".$capital."<br/><br/><hr/>";

}

 ?>	
</body>
</html>



