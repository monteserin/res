<?php 
	$opcion="";
	$checked="";
	$numRegistros="";
	$registroActual="";
     
	if(isset($_REQUEST["opcion"])) $opcion = $_REQUEST['opcion'];

        if(isset($_REQUEST['arrayDeEquipos']))$arrayDeEquiposRecuperado = $_REQUEST['arrayDeEquipos'];
            else $arrayDeEquiposRecuperado = "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>paginanción jugadores futbon en PHP | Pablo Monteserín</title>
		  <meta name="description" content="Ejemplo de paginación con PHP de jugadores y estadios">

</head>
<body>

<div id="izq" style="width:200px; float:left">
	<form method="get">
		<input type="submit" name="enviar" value="Enviar"><br/>
		
		<div style="width:200px; margin-top:15px; float:left">
			<input type="radio" <?php if($opcion == "estadios")echo "checked" ?> name="opcion" value="estadios">Estadios
			<input type="radio" <?php if($opcion == "jugadores")echo "checked" ?> name="opcion" value="jugadores">Jugadores
		</div>
		<?php
			include "funciones.php";
                        $equiposCheckadosSeparadosPorComas = imprimirChecks($arrayDeEquiposRecuperado);
		?>		
	</form>
</div>

<?php
	$incrementoDePaginacion = 15;

        if(!isset($_GET['registroAlQueVoy'])){
            $registroAlQueVoy = 0;
        }else{
            $registroAlQueVoy = $_GET['registroAlQueVoy'];
        }

imprimirTablaResultado($arrayDeEquiposRecuperado, $registroAlQueVoy);


				
?>

	
</body>
</html>