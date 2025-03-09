<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>paginación sencilla en PHP | Pablo Monteserín</title>
	<meta name="description" content="Ejemplo de paginación con PHP y MySQL, a partir de cierto registro, consultaremos 20 más, y en futuros ejercicios iremos visualizando registros de 20 en 20">

</head>
<body>
<h1>Consulta de base de datos Mysql con PHP</h1>
<?php
include "../../../conexion_no_incluida_en_ficheros_por_seguridad.php"; 
$pag = 0;

if(isset($_REQUEST["pag"]))$pag = $_REQUEST["pag"];
$incrementoPaginación = 10;
$registroAlQueVoy = $pag*$incrementoPaginación;

/*Consultamos la base de datos**************************/       
$sql = "SELECT * FROM jugador LIMIT ".$registroAlQueVoy.",20";
$result = mysqli_query($conexionFutbol, $sql)
or die("error en la consulta");

/*Imprimimos el resultado de la búsqueda****************/
while($row = mysqli_fetch_assoc($result)){
    echo $row['nombre']."</br>";
}
?>

	
</body>
</html>