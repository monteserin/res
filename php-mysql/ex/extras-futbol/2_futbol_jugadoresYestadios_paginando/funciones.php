<?php
    include "../../../conexion_no_incluida_en_ficheros_por_seguridad.php";

    function imprimirChecks($arrayDeEquiposRecuperado){
        global $conexionFutbol;
        $equiposCheckadosSeparadosPorComas="";
        $sql = "select nombre, equipo_cod from equipo";
        $result = mysqli_query($conexionFutbol, $sql);

        echo "<div style='width:200px; margin-top:15px; background-color:#FEFFC4; float:left'>
";
        while($row = mysqli_fetch_assoc($result)){
            echo "<input type='checkbox' name='arrayDeEquipos[]' value='".$row['equipo_cod']."'";
  
            //Determinamos para cada check si esta estará checkada o no
            if($arrayDeEquiposRecuperado!=""){
		foreach($arrayDeEquiposRecuperado as $var){
                    if($row['equipo_cod']==$var)echo" checked ";
                }
            }
            echo ">".$row['nombre']."<br/>\n";
	}
        echo "</div>";
        
        return $equiposCheckadosSeparadosPorComas;
    }
    
    function imprimirTablaResultado($arrayDeEquiposRecuperado, $registroAlQueVoy){
    if($arrayDeEquiposRecuperado!="")$equiposCheckadosSeparadosPorComas = implode(",", $arrayDeEquiposRecuperado);
        global $conexionFutbol;
        $incrementoDePaginacion = 15;
         if(isset($_GET['registroAlQueVoy']))$registroAlQueVoy = $_GET['registroAlQueVoy'];
	else $registroAlQueVoy=0;
        $result="";
	echo "<div id='blue' style='float:left; width:700px; background-color:blue;'><table border=1>";

	if(isset($_REQUEST['opcion'])){
            if($_REQUEST['opcion']=="estadios"){
		$sql = "select nombre, direccion, construccion, aforo from estadio where equipo_cod in(".$equiposCheckadosSeparadosPorComas.")";
		$result = mysqli_query($conexionFutbol, $sql);
		mysqli_data_seek($result, $registroAlQueVoy);
		echo ("<tr><th>Nombre</th><th>Dirección</th><th>Construcción</th><th>Aforo</th></tr><tr>");
		for($i=0; $i<$incrementoDePaginacion;$i++){
			$row = mysqli_fetch_assoc($result);
			echo "<td>".$row['nombre']."</td>";
			echo "<td>".$row['direccion']."</td>";
			echo "<td>".$row['construccion']."</td>";
			echo "<td>".$row['aforo']."</td></tr>";
                }
            }else{
		$sql = "SELECT SQL_CALC_FOUND_ROWS jugador.nombre 'nombreJugadores', equipo.nombre 'nombreEquipos' FROM jugador, equipo WHERE jugador.equipo_cod in(".$equiposCheckadosSeparadosPorComas.") and jugador.equipo_cod=equipo.equipo_cod order by equipo.nombre limit ".$registroAlQueVoy.",20";
		$sql2 = "SELECT FOUND_ROWS()";
		$result = mysqli_query($conexionFutbol, $sql);
		$result2 = mysqli_query($conexionFutbol, $sql2);
		$numRegistros = mysqli_fetch_row($result2) or die("error en la consulta 2");

	//	mysqli_data_seek($result, $registroAlQueVoy);
		echo "<tr><th>Nombre jugadores</th><th>Nombre equipos</th></tr>";
		

		for($i=0; $i<$incrementoDePaginacion;$i++){
			$row = mysqli_fetch_assoc($result);
			echo "<ty><td>".$row['nombreJugadores']."</td>";
			echo "<td>".$row['nombreEquipos']."</td></tr>";
		}
            }
	echo "</table></div>";
        echo "<div id='indices' style='float:left'>";
   $arrayEquipos = explode(',',$equiposCheckadosSeparadosPorComas);
   echo $arrayDeEquiposRecuperado;
   echo "xx".count($arrayDeEquiposRecuperado);
   for($i=0; $i<count($arrayDeEquiposRecuperado); $i++){
   	 $arrayQueEnvioEnElEnlace.= "&arrayDeEquipos[]=".$arrayDeEquiposRecuperado[$i];
   }    
	for($i=0, $j=1; $i<$numRegistros[0]; $i+=$incrementoDePaginacion,$j++){
		$registroAlQueVoy = $i;
		echo "<a href='index.php?enviar=Enviar&opcion=".$_REQUEST['opcion']."&registroAlQueVoy=".$registroAlQueVoy.$arrayQueEnvioEnElEnlace."'><div style='color:black;float:left; width:100px; height:2em; background-color:red'>Tabla ".$j."</div></a>\n";
	}

            }
	echo "</div></div>";
    }
?>
