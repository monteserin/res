<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ejercicio contador | Pablo Monteserín</title>
	<meta name="description" content="Ejemplo de la programación de un contador de visitas hecho con PHP en el que utilizaremos un documentos de texto para ir almacenando los sucesivos valores">

</head>
<body>
	<h1>Contador de visitas leyendo y escribiendo un fichero con PHP</h1>
	<?php 
	$file = "contador.txt";
	
	if (file_exists($file)){
	   echo "El fichero existe. Lo abro.<br/>";
	   $fp = fopen($file,"r+");
		$old = fgets($fp);	
		$old++;
	}else{
   	echo "El fichero no existe. Lo creo y abro.<br/>";
   	$fp = fopen($file, "a");
   	$old=1;
	} 	
	
	rewind($fp);
	fputs($fp, $old);
	fclose($fp);
	readfile($file);
?>


</body>
</html>