<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Update Combo con PHP y Mysql | Pablo Monteserín</title>
			  <meta name="description" content="Ejemplo actualizar un registro de una base de datos MySQL seleccionado a través de una combo desplegable">

</head>
<body>
<h1>En el código fuente de este documento PHP tienes como seleccionar un valor y que aparezca en el cuadro de texto adyacente</h1>
	<?php
	include ("../../conexion_no_incluida_en_ficheros_por_seguridad.php");
	$edad="";
	if(isset($_POST['nombre'])){
		$sql = "SELECT * FROM invitado where nombre='".$_POST['nombre']."'";
		$result = mysqli_query($conexionPersonas, $sql);
		$row = mysqli_fetch_assoc($result);
		$edad = $row['edad'];
	} 
	$sql = "SELECT * FROM invitado";
	$result = mysqli_query($conexionPersonas, $sql);
	
	$combo = '<select name="nombre" onchange="this.form.submit()"><option>Seleccione una opción, por favor</option>';
	while($row = mysqli_fetch_assoc($result)){
		$selected = "";
		if(isset($_POST['nombre']) && $_POST['nombre']== $row['nombre']){
			$selected = "selected";
		}
		$combo.= "<option ".$selected.">".$row['nombre']."</option>";
	}
	$combo.="</select>";
?>

<form method="post" action="#">
<?=$combo; ?>
	<input type="text" name="edad" value="<?= $edad?>" />
</form>

</body>
</html>