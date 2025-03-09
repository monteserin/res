<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ejercicio contador con imágenes en PHP | Pablo Monteserín</title>
	<meta name="description" content="Ejemplo de la programación de contador que utiliza imágenes para mostrar el número de visitas que recibe nuestra web">

</head>
<body>
	<h1>Contador de visitas leyendo un fichero de texto con PHP y números personalizados</h1>
	<?php 
	$file = "contador.txt";
	$fp = fopen($file,"r+");	
	if (file_exists($file)){
		echo "El fichero existe. Lo abro.<br/>";
		$old = fgets($fp);	
		$old = $old+1;
	}else{
		echo "El fichero no existe. Lo creo y abro.<br/>";
		$fp = fopen($file, "a");
		$old=1;
	} 	
	
	rewind($fp);
	fputs($fp, $old);
	for($i=0; $i<strlen($old); $i++){
		$digito = substr($old, $i, 1);
		echo "<img src=\"numerosGoticos/".$digito.".png\" alt=\"número gótico\" />";
	}
	fclose($fp);
	?>


</body>
</html>