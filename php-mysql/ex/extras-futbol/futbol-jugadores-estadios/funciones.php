<?php
    function imprimirChecks($arrayDeEquiposRecuperado){
        global $conexionFutbol;
        $equiposCheckadosSeparadosPorComas="";
        $sql = "SELECT nombre, equipo_cod FROM equipo";
        $result = mysqli_query($conexionFutbol, $sql);

        echo "<div style='width:200px; margin-top:15px; background-color:#FEFFC4; float:left'>";
        while($row = mysqli_fetch_assoc($result)){
            echo "<input type='checkbox' name='arrayDeEquipos[]' value='".$row['equipo_cod']."'";
  
            //Determinamos para cada check si esta estará checkada o no
                if($arrayDeEquiposRecuperado!="" && in_array($row['equipo_cod'], $arrayDeEquiposRecuperado)){
                    echo" checked ";
                }
            
            echo ">".$row['nombre']."<br/>\n";
	}
        echo "</div>";
        if($arrayDeEquiposRecuperado!=""){
            $equiposCheckadosSeparadosPorComas = implode(",", $arrayDeEquiposRecuperado);
        }
        return $equiposCheckadosSeparadosPorComas;
    }

    function imprimirTablaResultado($equiposCheckadosSeparadosPorComas){
        global $conexionFutbol;
        echo "<div style='float:left; margin-left:40px; background-color:#FECEC4'>".
             "<table border=1>";
	if(isset($_POST['opcion']) && $_POST['opcion']=="estadios"){
            $sql = "SELECT nombre, direccion, construccion, aforo FROM estadio WHERE equipo_cod in(".$equiposCheckadosSeparadosPorComas.")";
            $result = mysqli_query($conexionFutbol, $sql);
            echo "<tr><th>Nombre</th><th>Dirección</th><th>Construcción</th><th>Aforo</th></th>";
            while($row2 = mysqli_fetch_assoc($result)){
		echo ("<tr><td>".$row2['nombre']."</td><td>".$row2['direccion']."</td><td>".$row2['construccion']."</td><td>".$row2['aforo']."</td>");
            }
        }else if(isset($_POST['opcion']) && $_POST['opcion']=="jugadores"){
            $sql = "SELECT jugador.nombre 'nombreJugadores', equipo.nombre 'nombreEquipos' FROM jugador, equipo WHERE jugador.equipo_cod IN(".$equiposCheckadosSeparadosPorComas.") and jugador.equipo_cod=equipo.equipo_cod ORDER BY equipo.nombre";
            $result = mysqli_query($conexionFutbol, $sql);
            echo "<tr><th>Nombre jugadores</th><th>Nombre equipos</th></tr>";

            while($row2 = mysqli_fetch_assoc($result)){
		echo "<tr><td>".$row2['nombreJugadores']."</td>";
                echo "<td>".$row2['nombreEquipos']."</td>";
            }
	}
        echo "</tr></table></div>";
    }
?>