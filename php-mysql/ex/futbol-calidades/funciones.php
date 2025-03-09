 <?php
     include "../../../conexion_no_incluida_en_ficheros_por_seguridad.php";
 
    function pintarTablaNombreJugadoresYTablaCalidades($equipoSeleccionado){
        ///*Para acceder a una variable global desde dentro de una función es 
        //imprescindible declararla dentro de la función como global $variable
        //*/
        global $conexionFutbol;
        $sql = "select calidad, numero_camiseta, nombre from jugador where equipo_cod='$equipoSeleccionado' order by numero_camiseta";
        $result = mysqli_query($conexionFutbol, $sql) or die($sql);
	$fila1="";
        $fila2="";
        $nombreJugadores="";
        while($row = mysqli_fetch_assoc($result)){
            $calidad = $row['calidad']*40;
            $fila1 .= "<td style='vertical-align:bottom'><div style='background-color:yellow; width:30px; height:".$calidad."px'></div></td>\n";
            $fila2 .= "<td>".$row['numero_camiseta']."</td>";
            $nombreJugadores .= "<tr><td>".$row['numero_camiseta']."</td><td>".$row['nombre']."</td></tr>\n";
        }
	$tablaCalidades = "<table style='float:left;' border=1 ><tr>";
	$tablaCalidades .= $fila1."</tr><tr>";
	$tablaCalidades .= $fila2."</tr></table>";

	$tablaNombreJugadores = "<table style=' width:150px; float:left' border=1>".$nombreJugadores."</table>";

        echo $tablaNombreJugadores;
        echo $tablaCalidades;
    }

    function pintarCombo($conexionFutbol, $equipoSeleccionado){
        global $conexionFutbol;
        $options="";
	$sql = "select nombre, equipo_cod from equipo";
	$result = mysqli_query($conexionFutbol, $sql);
	while($row = mysqli_fetch_assoc($result)){
            $options .= "<option value='".$row['equipo_cod']."'";
            if($row['equipo_cod']==$equipoSeleccionado) $options.=" selected ";
            $options .= ">".$row['nombre']."</option>\n";
        }
        $combo = "<form name='formulario' method='POST' action='#'><select name='equipo' onchange='formulario.submit()'>".$options."</select></form>";
    
        echo $combo;
    }
?>
