<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>librería en PHP - consulta| Pablo Monteserín</title>
		  <meta name="description" content="Consulta la base de datos MySQL de una librería utilizando PHP para obtener el valor de los campos id, título y precio">

<style>
th,td{
border-style:inset
}
</style>
</head>
<body style="background-color:Khaki">
<div style="text-align:center; width:50%; margin:auto; border: #FFC0CB 6px groove; padding-left:2em">
<h1 style="font-family:helvetica; margin-left:auto; margin-right:auto">Consulta</h1>
<?php
	include "../../../conexion_no_incluida_en_ficheros_por_seguridad.php";
	$sql = "select * from libro";
	$result = mysqli_query($conexionLibreria, $sql);
	echo "<table style='margin-left:auto;margin-right:auto;margin-top:15px'>";
	echo "<tr><th>id</th><th>titulo</th><th>precio</th></tr>";
	while($row = mysqli_fetch_assoc($result)){
		echo"<tr>";
		echo "<td>";
		echo $row['id'];
		echo "</td><td>";
		echo $row['titulo'];
		echo"</td><td>";
		echo $row['precio'];
		echo"</td>";
		echo "</tr>";
	}
echo "</table>";
include("footer.php");
?>
</div>
</body>
</html>
