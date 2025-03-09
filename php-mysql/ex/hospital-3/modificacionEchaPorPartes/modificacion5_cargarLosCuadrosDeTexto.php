<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>cargar cuadros de texto | Pablo Monteserín</title>
</head>
<body>
	<?php
	$conexion = mysqli_connect('localhost', 'root', '', 'hospital');
	mysqli_set_charset($conexion, "utf8");
	
	if(isset($_POST['botonEnvio'])){
		echo "pulsé el botón de envío";
		$sqlCargaInfo = "select * from pacientes where id=".$_POST['combo'];
	}else{
		if(isset($_POST['combo'])){
			echo "le dí a la combo";
			$sqlCargaInfo = "select * from pacientes where id=".$_POST['combo'];
		}else{
			echo "acabo de llegar a la página";
			$sqlCargaInfo = "select * from pacientes";
		}
	}
	$resultCargaInfo = mysqli_query($conexion, $sqlCargaInfo);
	$rowCargaInfo = mysqli_fetch_assoc($resultCargaInfo);
	
?>
<form method="post" action="#">

<select name="combo" onchange="this.form.submit()">
	<?php
		$sqlCombo = "select * from pacientes";
		$resultCombo = mysqli_query($conexion, $sqlCombo);
		while($row = mysqli_fetch_assoc($resultCombo)){
	?>
	<option value="<?php echo $row['id']?>" <?php if($_POST['combo']==$row['id']) echo "selected"?> ><?php echo $row['Nombre']?></option>
	<?php
		}
	?>
</select><br/>

Nombre: <input type="text" value="<?php echo $rowCargaInfo['Nombre']; ?>"><br/>
Apellidos: <input type="text" value="<?php echo $rowCargaInfo['Apellidos']; ?>"><br/>

Fecha alta:<input type="text" size="2">
<input type="text" size="2">
<input type="text" size="4">
<input type="submit" name="botonEnvio" value="enviar">
</form>


</body>
</html>