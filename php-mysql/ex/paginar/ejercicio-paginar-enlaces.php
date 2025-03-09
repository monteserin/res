<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>paginar en PHP con enlaces| Pablo Monteserín</title>
	<meta name="description" content="Paginación con PHP haciendo consultas a una base de datos de jugadores de futbol. Cada vez que pulsamos en un enlace veremos una página con 20 nombres">

</head>
<body>
	<h1>Paginación con PHP</h1>
	<h2>Cada vez que pulsamos un enlace veremos 20 registros</h2>
	<?php
include "../../../conexion_no_incluida_en_ficheros_por_seguridad.php"; 
$pag = 0;

if(isset($_REQUEST["pag"]))$pag = $_REQUEST["pag"];
$incrementoPaginación = 10;
$registroAlQueVoy = $pag*$incrementoPaginación;

/*Consultamos la base de datos**************************/       
$sql = "SELECT * FROM jugador LIMIT ".$registroAlQueVoy.",".$incrementoPaginación;
$result = mysqli_query($conexionFutbol, $sql)
or die("error en la consulta");

/*Imprimimos el resultado de la búsqueda****************/
while($row = mysqli_fetch_assoc($result)){
    echo $row['nombre']."</br>";
}
?>





<a href="?pag=0">Pagina 1</a>
<a href="?pag=1">Pagina 2</a>
<a href="?pag=2">Pagina 3</a>


</body>
</html>