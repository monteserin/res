<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>detecta eventos hospital | Pablo Monteserín</title>
</head>
<body>
	
<?php

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
	<option>valor1
	</option>
	<option>valor2
	</option>
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