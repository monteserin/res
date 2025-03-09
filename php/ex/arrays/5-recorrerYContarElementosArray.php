<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>recorrer y contar elementos de un array | Pablo Monteserín</title>
		<meta name="description" content="Ejemplo de definición de un array en PHP y recorrido de todos sus valores">

</head>
<body>
	
	<?php 

	$capital['JP'] = "Tokyo";
	$capital['DK'] = "Copenhague";
	$capital['ES'] = "Madrid";

foreach($capital as $value){ 		//foreach($capital as $index=>$value){
	echo $value."<br/>";		
}

$elementosArray = count($capital);
echo "El array tiene ". $elementosArray." elementos";

?>


</body>
</html>