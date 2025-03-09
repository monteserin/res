<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>plantilla con includes en PHP | Pablo Monteserín</title>
	<meta name="description" content="Ejemplo de como usar la instrucción include de PHP para hacer una plantilla en la que cargaremos el contenido de la web">

</head>
<body>
<h1>Uso de include.php para hacer la carga dinámica de contenidos</h1>

<div id="wrapper" style="width:400px">
<div id="cabecera" style="float:left;width:400px; height:100px; background-color:red">
</div>	
	<div id="segundaFila"style="float:left">
<div id="botonera" style="float:left;width:100px; height:400px; background-color:pink">
	<a href="index.php?page=contenido1">Pagina 1</a>
	<a href="index.php?page=contenido2">Pagina 2</a>
</div>
		<div id="contenido" style="background-color:orange; float:left;width:300px; height:400px">
			<?php
			$page = "contenido1";
			if(isset($_GET['page']) && file_exists("contenidos/".$_GET['page'].".php")){
				$page = $_GET['page'];
			}
			$path = "contenidos/".$page.".php";

			include $path;
			?>
		</div>
	</div>
</div>

	
</body>
</html>