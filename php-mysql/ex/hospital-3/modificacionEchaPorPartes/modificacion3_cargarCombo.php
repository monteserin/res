<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>carga combo hospital | Pablo Monteserín</title>
</head>
<body>
	
<?php
	$conexion = mysqli_connect('localhost', 'root', '', 'hospital');
	if(isset($_POST['botonEnvio'])){
		echo "pulsé el botón de envío";
	}else{
		if(isset($_POST['combo'])){
			echo "le dí a la combo";
		}else{
			echo "acabo de llegar a la página";
		}
	}
	
?>
<form method="post" action="#">

<select name="combo" onchange="this.form.submit()">
	<?php
		$sqlCombo = "select * from pacientes";
		$resultCombo = mysqli_query($conexion, $sqlCombo);
		while($row = mysqli_fetch_assoc($resultCombo)){
	?>
	<option><?php echo $row['Nombre']?></option>
	<?php
		}
	?>
</select><br/>

Nombre: <input type="text"><br/>
Apellidos: <input type="text"><br/>

Fecha alta:<input type="text" size="2">
<input type="text" size="2">
<input type="text" size="4">
<input type="submit" name="botonEnvio" value="enviar">
</form>


</body>
</html>