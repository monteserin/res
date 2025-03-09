<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<title>Página de introducción de entradas en el blog | Pablo Monteserín</title>
	<meta name="description" content="Página de introducción de entradas en un blog hecho con PHP y MySQL">


	


<?php

	function generarXML(){
		$sql = "select * from entrada order by fecha";
		$result = mysqli_query($conexionBlog, $sql);
		$xml = "<rss version=\"0.91\">
				<channel><title>RSS del blog</title>
				<link>http://www.pablomonteserin.com.com/</link>
    				<description>El mejor blog del mundo</description>
    				<language>en-us</language>";
		while($row = mysqli_fetch_assoc($result)) {

			$titulo = $row['titulo'];
			//$link = $row['firstname'];
			$description = $row['texto'];
	
			$xml .= "\t\t<item>\n";
			$xml .= "\t\t\t<title>$titulo</title>\n";
			$xml .= "\t\t\t<link></link>\n";
			$xml .= "\t\t\t<description>$description</description>\n";
			$xml .= "\t\t</item>\n";
		}
		$xml .= "</channel></rss>";

		$file = "../noticias.rss";
		$fp = fopen($file, "w+");
		rewind($fp);
		fputs($fp,$xml);
		fclose($fp);
	}


	if(isset($_POST['enviar'])){
    include "../../../../conexion_no_incluida_en_ficheros_por_seguridad";
		$sql = "insert into entrada values(null,'".$_POST['titulo']."','".$_POST['texto']."', null)";
		mysqli_query($conexionBlog, $sql) or die($sql);

		generarXML();
		
	}		
?>
<form method="post" action="#">
	<input type="text" name="titulo" /><br/>
	<textarea name="texto"></textarea><br/>
	<input type="submit" name="enviar"/><br/><br/>
</form>

<?php 		
	include "volver.php";
?>

</body>
</html>