<?php
	include ("../../../conexion_no_incluida_en_ficheros_por_seguridad.php");
	$sql = "select * from juego ORDER BY id";
	$result = mysqli_query($conexion_varios, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>consulta en tabla html compleja con PHP | Pablo Monteserín</title>
	<meta name="description" content="Consulta a una tabla MySQL y distribución de los resultados a diferentes celdas de una tabla utilizando PHP">

<style>
td{border-style: inset; border-style: solid; border-color:green; border-width:10px;}
</style>
</head>
<body>
	<h1>Rellenar varias celdas de una tabla con una sola consulta a la base de datos usando PHP</h1>

<table border=1 style="border-width: 10px; border-style: solid; ">
        <tr>
            <th>todos los juegos
            </th>
            <th>clasificación por consola
            </th>
            <th>clasificación por edad
            </th>
        </tr>
        <tr>
		<td rowspan="3">
			<?php
				while($row=mysqli_fetch_assoc($result)){
					echo ($row['nombre']."<br/>");
				}
				mysqli_data_seek($result, 0);
			?>
		</td>
		<td  rowspan="2" ><?php
				while($row=mysqli_fetch_assoc($result)){
					if($row['consola']=="PS1")echo ($row['nombre']."<br/>");
				}
				mysqli_data_seek($result, 0);
			?>
		</td>
		<td><?php
				while($row=mysqli_fetch_assoc($result)){
					if($row['edad']==3)echo ($row['nombre']."<br/>");
				}
				mysqli_data_seek($result, 0);
			?>
		</td>
	</tr>
	<tr>
		<td>
			<?php
				while($row=mysqli_fetch_assoc($result)){
					if($row['edad']=="7")echo ($row['nombre']."<br/>");
				}
				mysqli_data_seek($result, 0);
			?>
		</td>
	</tr>
	<tr>
		<td><?php
				while($row=mysqli_fetch_assoc($result)){
					if($row['consola']=="PS2")echo ($row['nombre']."<br/>");
				}
				mysqli_data_seek($result, 0);
			?>
		</td>
                <td><?php
				while($row=mysqli_fetch_assoc($result)){
					if($row['edad']==18)echo ($row['nombre']."<br/>");
				}
				mysqli_data_seek($result, 0);
			?>
		</td>
		
	</tr>
</table>
</body>
</html>