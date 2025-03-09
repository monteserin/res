<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>paginar en PHP con enlaces | Pablo Monteserín</title>
	<meta name="description" content="Ejemplo de paginación consultando un número determinado de registros de una base de datos MySQL de jugadores de jugadores de futbol utilizando código PHP">

</head>
<body>
<h1>Paginación con PHP</h1>
<h2>Sin límite de enlaces de paginación</h2>
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
$row = mysqli_fetch_assoc($result);
$ultimoReg = $row["num_reg"];

for($pag=0; $pag<=$ultimoReg/$incrementoPaginación; $pag++){
    echo '<a href="?pag='.$pag.'">Pagina '.($pag+1).'</a>';    
}
?>

	
</body>
</html>