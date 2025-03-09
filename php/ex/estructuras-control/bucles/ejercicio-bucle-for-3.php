<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ejercicio bucle for en PHP con palabras | Pablo Monteserín</title>
	  <meta name="description" content="Ejemplo de uso del bucle 'for' y de la estructura de control 'if' de PHP para ir evaluando si un grupo de números son divisibles por 3 y 5">
</head>
<body>
	
<h1>Ejemplo de uso del bucle 'for' y de la estructura de control 'if'</h1>

<?php
	for($i=0; $i<100; $i++){
		if($i%3==0 && $i%5==0){
			echo "FizzBuzz";
		}elseif($i%3==0){
			echo "Fizz";
		}elseif($i%5==0){
			echo "Buzz";
		}else{
			echo $i;
		}
		echo "<br/>";
	}
?>


</body>
</html>