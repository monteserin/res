<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ejercicio coste avión en PHP | Pablo Monteserín</title>
		<meta name="description" content="Ejemplo de uso de funciones PHP para calcular el coste de un viaje (del avión)">

</head>
<body>
<h1>Uso de varias funciones de PHP para calcular el coste de un viaje</h1>	
	<form action="#">
	<label>Introduzca el número de noches</label>
	<input type="text" name="numNoches"><br>
	<select name="ciudad">
		<option value="Oviedo">Oviedo</option>
		<option value="Tokyo">Tokyo</option>
		<option value="Madrid">Madrid</option>
		<option value="Barcelona">Barcelona</option>
	</select>
	<input type="submit" name="submit" value="calcular coste">
	<br><br>
</form>

<?php
function coste_hotel($numNoches){
	return 140*$numNoches;
}

function coste_avion($destino){
	if($destino=="Oviedo"){
		return 183;
	}elseif($destino=="Tokyo"){
		return 220;
	}elseif($destino=="Madrid"){
		return 222;
	}elseif($destino=="Barcelona"){
		return 475;
	}
}

if(isset($_REQUEST['submit'])){
$numNoches = $_REQUEST['numNoches'];
$ciudad = $_REQUEST['ciudad'];
$coste_hotel = coste_hotel($numNoches);
$coste_avion = coste_avion($ciudad);
$coste_total = $coste_hotel+$coste_avion;
echo "Coste hotel: ".$coste_hotel."<br/>";
echo "Coste avión: " .$coste_avion."<br/>";
echo "Coste total: " . $coste_total;

}
?>


</body>
</html>