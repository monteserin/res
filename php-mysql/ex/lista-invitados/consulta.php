<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>consulta invitados en PHP - consulta| Pablo Monteserín</title>
		<meta name="description" content="Consulta de los datos de una tabla de con datos de invitados de una base de datos MySQL utilizando PHP">

</head>
<body style="background-color:pink">
<div style="text-align:center; width:18em; margin:auto; border: #FFC0CB 6px groove; padding-left:2em">
<h1 style="font-family:helvetica; margin-left:auto; margin-right:auto">Consulta</h1>
<?php
	include "../../../conexion_no_incluida_en_ficheros_por_seguridad.php";
	$sql = "SELECT * FROM invitado";
	$result = mysqli_query($conexionPersonas, $sql);
	echo "<table style='margin-left:auto;margin-right:auto;margin-top:15px'>";
	while($row = mysqli_fetch_assoc($result)){
		echo $row['nombre']."<br/>";
	}
echo "</table>";
include("footer.php");
?>
</div>
</body>
</html>
