<?php
$file = "2-libroVisitasNombre.txt";

if(isset($_POST['enviar'])){
	$nombre = $_POST['nombre'];
	/*Creamos un puntero a partir del cual vamos a escribir*/	
	$fp = fopen($file, "r+");
		/*Si el archivo no contiene informaci�n, su filesize ser� 0 y 
		nos dar� un error al invocar a la funci�n que lee el archivo(fread). */
		if(filesize($file)!=0){
			/*Leemos todos los datos y los almacenamos en old*/
			$old = fread($fp, filesize($file));
		}else{
			$old="";		
		}
		/*Llevamos el cursor al principio del texto*/
		rewind($fp);
		/*Escribir la nueva entrada antes que las antiguas en el archivo*/
		fputs($fp, $nombre." \n ".$old);
		fclose($fp);
	}

	readfile($file);
	?>

	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="UTF-8">
		<title>libro de visitas en PHP | Pablo Monteser�n</title>
		    <meta name="description" content="Ejemplo de la programaci�n de un libro de visitas utilizando PHP y salvando los datos en un fichero en el servidor">

	</head>
	<body>
		<form method="post" action="#">
			Introduce tu nombre:<br/>
			<input name="nombre" type="text" size="10" maxlength="10">
			<input type="submit" name="enviar" value="Enviar formulario"><br/>
		</form>
	</body>
	</html>
