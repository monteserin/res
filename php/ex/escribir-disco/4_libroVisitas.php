<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Libro de visitas en PHP | Pablo Monteserín</title>
			    <meta name="description" content="Ejemplo de la programación de un libro de visitas utilizando PHP y salvando los datos en un fichero en el servidor">

</head>
<body>
<form method="post" action="<?php $PHP_SELF ?>">
	<p>Nombre&nbsp;
	<input name="nombre" type="text"></p>
	<p>Comentario</p>
    	<textarea name="txt" cols="51" rows="4"></textarea>
    	<br/>
    	<input type="submit" name="botonDeSubmit" value="Enviar!!">
</form>
<h1>Comentarios</h1>

<?php
	$file = "4_libroVisitas.txt";

	if(isset($_POST['botonDeSubmit'])){
			$comentario = $_POST['txt'];
			$nombre = $_POST['nombre'];
			$fp = fopen($file, "r+");
			$old = fgets($fp);
			$dateOfEntry = date("j-n-y");	
			$entry = "<p>".$nombre." escribió el ". $dateOfEntry.": <br/>".$comentario."<br/></p>";
			rewind($fp);
			fputs($fp, $entry."\n".$old);
			fclose($fp);
		}
	/*Leemos el archivo completo y lo imprimimos en pantalla*/
	
	readfile($file);

?>
</body>
</html>



