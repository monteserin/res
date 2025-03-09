<?php
	$file = "3-escribirEnDisco.txt";

	if(isset($_POST['enviar'])){
		$tamano="";
		$nombre = $_POST['nombre'];
		if(isset($_POST['checkbox'])){
			$envuelta = "envuelta para regalo";	
		}else{
			$envuelta = "no envuelta para regalo";		
		}
		$material = $_POST['material'];
		if(isset($_POST['radioTamano'])){
			$tamano = $_POST['radioTamano'];
		}		

		$textArea = $_POST['textArea'];
		
		$txt = "El señor ".$nombre." ha solicitado una caja ".$envuelta.
		" de ".$material." de tamaño ".$tamano.". ".$textArea;
		
		/*Creamos un puntero a partir del cual vamos a escribir*/	
		$fp = fopen($file, "r+");
		/*Si el archivo no contiene información, su filesize será 0 y 
		nos dará un error al invocar a la función que lee el archivo(fread). */
		if(filesize($file)!=0){
			/*Leemos todos los datos y los almacenamos en old*/
			$old = fread($fp, filesize($file));
		}
		/*Llevamos el cursor al principio del texto*/
		rewind($fp);
		/*Escribir la nueva entrada antes que las antiguas en el archivo*/
		fputs($fp, $txt);
		fclose($fp);
	}
?>
<!DOCTYPE html>
<html>
<head>
<title>formulario</title>
	<meta charset="UTF-8">
			    <meta name="description" content="Ejemplo de la programación de un libro de visitas utilizando PHP y salvando los datos en un fichero en el servidor">

</head>
<body>
<form method="post" action="#">
    Nombre del cliente:<br/>
    <input name="nombre" type="text" size="51" maxlength="5"><br/><br/>
	Se la envolvemos para regalo?<input type="checkbox" name="checkbox"><br/><br/>
    Material de la caja
    <select name="material">
      <option value="cartón">Cart&oacute;n</option>
      <option value="plástico">Pl&aacute;stico</option>
    </select>   
    <br/><br/>Seleccione un tama&ntilde;o para la caja<br/>
    <input type="radio" name="radioTamano" value="Peque&ntilde;o">Peque&ntilde;o<br/>
    <input type="radio" name="radioTamano" value="Mediano">Mediano<br/>
    <input type="radio" name="radioTamano" value="Grande">Grande<br/> 
    <br/>Comentarios<br/><textarea name="textArea" cols="51" rows="4"></textarea><br/>
    <input type="submit" name="enviar" value="Enviar formulario"><br/>
</form>
</body>
</html>
