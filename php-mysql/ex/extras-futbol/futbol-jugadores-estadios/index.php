<meta content="text/html; charset=UTF-8" http-equiv="content-type">
<?php 
	$opcion="";
	$checked="";
	if(isset($_POST["opcion"]))$opcion = $_POST['opcion'];
	
        if(isset($_REQUEST['arrayDeEquipos'])) $arrayDeEquiposRecuperado = $_REQUEST['arrayDeEquipos'];
        else $arrayDeEquiposRecuperado = "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>futbol en PHP | Pablo Monteserín</title>
	  <meta name="description" content="Ejemplo de consulta a una tabla de jugadores de futbol de una base de datos MySQL utilizando PHP. Tras seleccionar los equipos, podremos ver los jugadores">

</head>
<body>
	<h1>Consulta a una tabla de jugadores de futbol con PHP y MySQL</h1>


<div id="izq">
	<form method="post" action="#">
		<input type="submit" name="enviar" value="Enviar"><br/>
		
		<div style="width:200px; margin-top:15px">
			<input type="radio" <?php if($opcion == "estadios")echo "checked" ?> name="opcion" value="estadios">Estadios
			<input type="radio" <?php if($opcion == "jugadores")echo "checked" ?> name="opcion" value="jugadores">Jugadores
		</div>
		<?php 
    include "../../../../conexion_no_incluida_en_ficheros_por_seguridad.php";
			include "funciones.php";
                        $equiposCheckadosSeparadosPorComas = imprimirChecks($arrayDeEquiposRecuperado);
		?>		
	</form>
</div>
<div>
<?php
    imprimirTablaResultado($equiposCheckadosSeparadosPorComas);
?>
</div>

</body>
</html>