<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>mapa del tesoro en PHP | Pablo Monteserín</title>
	<meta name="description" content="Cada vez que refresques esta página, su código PHP hará que las monedas aparezcan en diferentes posiciones sobre el mapa">

</head>

<body>
	<h1>Colocar monedas en posiciones aleatorias sobre un mapa/ utilizando PHP</h1>


	<div style="width:725px; height:483px; background: url(https://pablomonteserin.com/res/php/ex/funciones/mapa/Bluemap.jpg); margin:auto; overflow:hidden; position:relative">
		<?php

		for ($i = 0; $i <= 10; $i++) {
			$x = rand(0, 725);
			$y = rand(0, 483);
			echo "<img src=\"https://pablomonteserin.com/res/php/ex/funciones/mapa/goldCoin.png\" style=\"width:50px;position:absolute; margin-left:" . $x . "px; margin-top:" . $y . "px\" alt=\"moneda de oro\">";
		}

		?>

	</div>

</body>

</html>