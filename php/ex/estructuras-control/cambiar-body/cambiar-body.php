<?php
	if(isset($_POST['enviar'])){
		$fondo = $_POST['color'];
	}else{
            $fondo = "white";
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>cambiar body  en PHP | Pablo Monteserín</title>
			<meta name="description" content="Ejemplo página web que cambia el color de fondo de una página web utilizando PHP">

</head>
<body style ="background-color:<?php echo $fondo; ?>">
	

<h1>Código PHP que evalua el valor introducido en un formulario para pintar la página de ese color</h1>

<form method="post" action="#">
	<select name="color">
		<option>Seleccione un color, por favor</option>
		<option value="green">Verde
		</option>
		<option value="red">Rojo
		</option>
		<option value="blue">Azúl
		</option>
		<option>Rosa
		</option>
	</select>
    <input type="submit" name="enviar" value="Enviar formulario">
</form>
</body>
</html>