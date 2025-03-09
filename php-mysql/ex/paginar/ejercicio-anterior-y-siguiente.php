<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>paginar en PHP con botón de anterior y siguiente</title>
	<meta name="description" content="Ejemplo de paginación haciendo consultas a una base de datos MySQL utilizando la instrucción SQL SQL_CALC_FOUND_ROWS">

</head>
<body>
<h1>Ejemplo de paginación haciendo consultas a una base de datos MySQL utilizando la instrucción SQL SQL_CALC_FOUND_ROWS</h1>
<?php
include "../../../conexion_no_incluida_en_ficheros_por_seguridad.php"; 
$paginaALaQueVoy = 0;

if(isset($_REQUEST["pag"]))$paginaALaQueVoy = $_REQUEST["pag"];
$incrementoPaginación = 10;
$registroAlQueVoy = $paginaALaQueVoy*$incrementoPaginación;

/*Consultamos la base de datos**************************/       
$sql = "SELECT SQL_CALC_FOUND_ROWS * FROM jugador LIMIT ".$registroAlQueVoy.",".$incrementoPaginación;
$result = mysqli_query($conexionFutbol, $sql)
or die(mysqli_error($conexionFutbol).$sql);

/*Imprimimos el resultado de la búsqueda****************/
while($row = mysqli_fetch_assoc($result)){
	echo $row['nombre']."</br>";
}


$sql = "SELECT FOUND_ROWS() 'num_reg'";
$result = mysqli_query($conexionFutbol, $sql);
$row = mysqli_fetch_assoc($result);
$ultimoReg = $row["num_reg"];
$numPags = $ultimoReg/$incrementoPaginación;
/*for($pag = ($paginaALaQueVoy-5<0)?0:$paginaALaQueVoy; $pag<=($paginaALaQueVoy+5>$numPags)?$numPags:$paginaALaQueVoy+5; $pag++){
    echo '<a href="?pag='.$pag.'">Pagina '.($pag+1).'</a>';    
}*/
$pagInicial = ($paginaALaQueVoy-5<0)?0:$paginaALaQueVoy-5;
$pagFinal = ($pagInicial+9>$numPags)?$numPags:$pagInicial+9;

$anterior = $paginaALaQueVoy-1;
$siguiente = $paginaALaQueVoy+1;

for($pag = $pagInicial; $pag<=$pagFinal; $pag++){
	if($pag == $paginaALaQueVoy){
		echo '<a href="?pag='.$pag.'" style="color:red" >Pagina '.($pag+1).'</a>';    

	}else{
		echo '<a href="?pag='.$pag.'" style="color:black" >Pagina '.($pag+1).'</a>';    

	}
}
echo "<br/>";
echo "<a href='?pag=".$anterior."'>Anterior</a> - ";
echo "<a href='?pag=".$siguiente."'>Siguiente</a>";
?>


	
</body>
</html>