<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>consulta con bucle | Pablo Monteserín</title>
		  <meta name="description" content="Ejemplo de como hacer una consulta a una base de datos y mostrar los resultados en pantalla con PHP">

</head>
<body>

<?php
	include "../../conexion_no_incluida_en_ficheros_por_seguridad.php";

	$sql = "select * from invitado";	
	$result = mysqli_query($conexionPersonas, $sql)
	or die(mysqli_error($conexionPersonas)."<br/>".$sql); 					
	
	echo "<table>";
		while($row = mysqli_fetch_assoc($result)){
			echo "<tr><td>";
			echo $row['nombre'];
			echo "</td></tr>";
		}
	echo "</table>";
?>

	
</body>
</html>