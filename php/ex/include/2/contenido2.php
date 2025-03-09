<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>plantilla de contenido 2 con includes en PHP</title>
				  <meta name="description" content="Ejemplo de como usar la instrucción include de PHP para hacer una plantilla en la que cargaremos la cabecera y el footer de la web">

</head>
<body>


<div id="wrapper" style="width:400px">
	<div id="cabecera" style="float:left">
		<?php include "cabecera.html"; ?>
	</div>

	<div id="segundaFila"style="float:left">
		<div id="botonera" style="float:left">
			<?php include "botonera.html"; ?>
		</div>
		<div id="contenido" style="background-color:orange; float:left;width:300px; height:400px">
			<div id="contenidoInt" style="width:100%; height:100%; background-color:purple">Contenido 2
			</div>
		</div>
	</div>
</div>

	
</body>
</html>