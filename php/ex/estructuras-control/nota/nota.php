<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ejercicio nota en PHP | Pablo Monteserín</title>
		<meta name="description" content="En función de la nota enviada desde el formulario anterior, en esta página veremos una valoración en modo texto">

</head>
<body>

<?php 
$nota=$_REQUEST["nota"];
if($nota>5){
	echo "Aprobado";
}else if($nota==5){
	echo "Aprobado por los pelos";
}else{
	echo "Suspenso";
}
 ?>
	
</body>
</html>