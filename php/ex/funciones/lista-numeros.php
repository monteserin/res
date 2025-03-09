<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ejercicio lista de números en PHP | Pablo Monteserín</title>
		  <meta name="description" content="Ejercicio de PHP que recupera dos números y en función de si son divisibles por 4 o 5 los procesa realizando diferentes operaciones">

</head>
<body>
<h1>Ejercicio de operaciones aritméticas con PHP</h1>
<?php 
$n1 = $_REQUEST["n1"];
$n2 = $_REQUEST["n2"];
$nmenor=0;
$nmayor=0;

if($n1<$n2){
	$nmenor=$n1;
	$nmayor=$n2;
}else{
	$nmenor=$n2;
	$nmayor=$n1;
}

for($i=$nmenor; $i<=$nmayor; $i++){
	$color=false;
	$opt=0;
	if(divisible($i,4) || divisible($i,5)){
	echo "<br/><span style=\"color:red\">".$i."</span>";
	}else echo "<br>".$i;
	if(divisible($i,4)){
		$color=true;
		suma($i);
	}
	if(divisible($i,5)){
		$color=true;
		producto($i);
	}
	
}

function divisible($n1, $n2){
	if($n1%$n2==0){
		return true;
	}
	return false;
}

function suma($n){
	$output = "";
	$sumaTotal = 0;
	$ultimaCifra = substr($n, strlen($n)-1, 1);
	for($i=$n; $i<=$n+$ultimaCifra-1; $i++){
		$output .= $i." "; 
		$sumaTotal+=$i;
	}
	echo "<br/>".$output." Suma = ".$sumaTotal;

}

function producto($n){
	$output = "";
	$producto = 1;
	$ultimaCifra = substr($n, strlen($n)-1, 1);
	if($ultimaCifra==0)$producto=0;
	for($i=$n; $i>=$n-$ultimaCifra+1; $i--){
		$output .= $i." "; 
		$producto*=$i;
	}
	echo "<br/>".$output." Producto = ".$producto;

}
?>

	
</body>
</html>