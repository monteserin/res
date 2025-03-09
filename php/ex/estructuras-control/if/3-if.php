<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>if en PHP | Pablo Monteserín</title>
		<meta name="description" content="Ejemplo básico de la estructura de control 'if' programada utilizando PHP">

</head>
<body>
	
	<?php
	$dato1 = 3;
	$dato2 = 5;
	if($dato1 > $dato2){
		echo "dato1 es mayor que dato2";
		echo "<br/>dato1 es mayor que dato2";
	}elseif($dato1 < $dato2){
		echo "Va a ser que no...";
		echo "<br/>Va a ser que no...";
	}
	?>



</body>
</html>