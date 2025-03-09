<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ejercicio coste alquiler coche en PHP | Pablo Monteserín</title>
	<meta name="description" content="Ejemplo de uso de funciones PHP para calcular el coste de un viaje (del alquiler del coche)">

</head>
<body>
	<h1>Programa PHP que mediante el uso de funciones calcula el coste de un viaje</h1>
	<form action="#">
	<label>Introduzca el número de noches</label>
	<input type="text" name="numNoches"><br>
	<select name="ciudad">
	<option value="">Seleccione una opción, por favor</option>
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

	function coste_alquiler_coche($num_dias){
		$costeTotal = $num_dias*40;
		if($num_dias>=7){
			$costeTotal -=-50;
		}elseif($num_dias>=3){
			$costeTotal -=-20;
		}
		return $costeTotal;
	}
	if(isset($_REQUEST['submit'])){
$numNoches = $_REQUEST['numNoches'];
$ciudad = $_REQUEST['ciudad'];
$coste_hotel = coste_hotel($numNoches);
$coste_avion = coste_avion($ciudad);

$coste_alquiler_coche = coste_alquiler_coche($numNoches);
$coste_total = $coste_hotel+$coste_avion+$coste_alquiler_coche;
echo "Coste hotel: ".$coste_hotel."<br/>";
echo "Coste avión: " .$coste_avion."<br/>";
echo "Coste alquiler coche: " .$coste_alquiler_coche."<br/>";

echo "Coste total: " . $coste_total;

}
?>

</body>
</html>