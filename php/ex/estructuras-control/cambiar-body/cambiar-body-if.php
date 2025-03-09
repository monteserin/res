<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>cambiar body con if en PHP | Pablo Monteserín</title>
			<meta name="description" content="Ejemplo página web que cambia el color de fondo de una página web utilizando PHP">

</head>
<body>
<h1>Programa PHP que cambia el color de fondo de una página</h1>
<?php
	if(isset($_POST['enviar']))$fondo = $_POST['color'];	
	else $fondo="white";
	echo "<style>body{background-color:".$fondo."}</style>"
?>


<form method="post" action="#">
	<select name="color">
		<option>Seleccione un color, por favor</option>
		<option <?php if($fondo=="green")echo "selected"; ?> value="green">Verde
		</option>
		<option <?php if($fondo=="red")echo "selected"; ?> value="red">Rojo
		</option>
		<option <?php if($fondo=="blue")echo "selected"; ?> value="blue">Azul
		</option>
		<option <?php if($fondo=="pink")echo "selected"; ?> value="pink">Rosa
		</option>
	</select>
    <input type="submit" name="enviar" value="Enviar formulario">
</form>

	
</body>
</html>