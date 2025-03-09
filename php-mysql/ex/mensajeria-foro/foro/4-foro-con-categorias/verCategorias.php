<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>foro en PHP | Pablo Monteserín</title>
</head>
<body>
	
	<?php
	include "../../../../conexion_no_incluida_en_ficheros_por_seguridad.php";
	$sql = "select * from categoria";
	$result = mysqli_query($conexion_varios, $sql);
	while(mysqli_fetch_assoc($result)){
		?>
		<a href="verHilo.php"><?php echo $row['categoria'];?></a>
		<?php
	}
	?>


</body>
</html>