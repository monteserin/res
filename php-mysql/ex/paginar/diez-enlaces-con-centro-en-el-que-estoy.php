<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>paginar en PHP | Pablo Monteserín</title>
	<meta name="description" content="Ejemplo de paginación en una web que utiliza PHP para lanzar consultas a una base de datos MySQL de jugadores de futbol.">

</head>
<body>

<h1>Ejemplo de paginación con PHP y MySQL</h1>
<?php
include "../../../conexion_no_incluida_en_ficheros_por_seguridad.php"; 
$pag = 0;

if(isset($_REQUEST["pag"]))$pag = $_REQUEST["pag"];
$incrementoPaginación = 10;
$registroAlQueVoy = $pag*$incrementoPaginación;

/*Consultamos la base de datos**************************/       
$sql = "SELECT * FROM jugador LIMIT ".$registroAlQueVoy.",".$incrementoPaginación;
$result = mysqli_query($conexionFutbol, $sql)
or die(mysqli_error($conexionFutbol).$sql);

/*Imprimimos el resultado de la búsqueda****************/
while($row = mysqli_fetch_assoc($result)){
    echo $row['nombre']."</br>";
}


$sql = "SELECT count(*) AS 'num_reg' FROM jugador";
$result = mysqli_query($conexionFutbol, $sql);
$ultimoReg = mysqli_fetch_array($result)[0];
$numPags = round($ultimoReg/$incrementoPaginación);
/*for($pag = ($pag-5<0)?0:$pag; $pag<=($pag+5>$numPags)?$numPags:$pag+5; $pag++){
    echo '<a href="?pag='.$pag.'">Pagina '.($pag+1).'</a>';    
}*/
$pagInicial = ($pag<5)?0:$pag-5;
$pagFinal = ($pagInicial+9>$numPags)?$numPags:$pagInicial+9;
for($pag = $pagInicial; $pag<=$pagFinal; $pag++){
    echo '<a href="?pag='.$pag.'">Pagina '.($pag+1).'</a>';    
}
?>

	
</body>
</html>