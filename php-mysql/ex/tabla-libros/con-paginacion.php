<?php
	include "../../../conexion_no_incluida_en_ficheros_por_seguridad.php";
	echo $_POST['action'];
	if(isset($_POST['action'])&&$_POST['action']=="anadir"){
	$sql = "insert into libro(titulo, precio) values('".$_POST['titulo']."','".$_POST['precio']."')";
	echo $sql;
		mysqli_query($conexionLibreria, $sql);
	}else if(isset($_POST['action']) && $_POST['action']=="eliminar"){
		$sql = "delete from libro where id='".$_POST['identificador']."'";
		mysqli_query($conexionLibreria, $sql);
	}else if(isset($_POST['action']) && $_POST['action']=="modificar"){
		$sql = "update libro set titulo='".$_POST['titulo_modificar']."', precio='".$_POST['precio_modificar']."' where id='".$_POST['identificador']."'";
		echo $sql;
		mysqli_query($conexionLibreria, $sql);
	}


	$incrementoPaginacion = 2;
	if(isset($_GET['paginaALaQueVoy'])){
			$paginaALaQueVoy = $_GET['paginaALaQueVoy'];
	}else{
		$paginaALaQueVoy = 0;
	}
	$registroAlQueVoy = $paginaALaQueVoy*$incrementoPaginacion;

	$sql = "select SQL_CALC_FOUND_ROWS * from libro limit $registroAlQueVoy, $incrementoPaginacion";
	echo $sql;
	$result = mysqli_query($conexionLibreria, $sql);
	$sql2 = "SELECT FOUND_ROWS()";
   $result2 = mysqli_query($conexionLibreria, $sql2);
   $numFilas = mysqli_fetch_row($result2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>paginación en consulta con PHP | Pablo Monteserín</title>
	                <meta name="description" content="Paginación de una consulta hecha a la tabla libros a una base de datos MySQL utilizando PHP">

	<script type="text/javascript">
function borrar(id){
	document.getElementById("identificador").value = id;
	document.getElementById("action").value = "eliminar";
	alert(document.getElementById("action").value);
	document.getElementById("formulario").submit();
}
function modificar(id){
	document.getElementById("identificador").value = id;
	document.getElementById("action").value = "modificar";
	var titulo = "titulo_"+id;
		alert(titulo);

	document.getElementById("titulo_modificar").value = document.getElementById("titulo_"+id).value;
	document.getElementById("precio_modificar").value = document.getElementById("precio_"+id).value;

	document.getElementById("formulario").submit();
}
</script>
</head>
<body>
<h1>Ejemplo de paginación con PHP y MySQL</h1>
<form method="post" action="#" id="formulario">

<table border="1">
	<tr><th>id</th><th>titulo</th><th>precio</th><th>opcion</th></tr>
<?php
	while($row = mysqli_fetch_assoc($result)){
?>
	<tr>
		<td>
			<input type="text" value="<?=$row['id'] ?>" />
		</td>
		<td>
			<input type="text" id="titulo_<?=$row['id'] ?>"  value="<?=$row['titulo'] ?>" />
		</td>
		<td>
			<input type="text" id="precio_<?=$row['id'] ?>"  value="<?=$row['precio'] ?>" />
		</td>
		<td>

			<input type="button" onclick="borrar(<?=$row['id'] ?>)"  value="eliminar" />
			<input type="button" onclick="modificar(<?=$row['id'] ?>)"  value="modificar" />
		</td>

	</tr>
<?php

	}
?>
	<tr>
		<td><input type="hidden" id="action" name="action" value="anadir"/>
			<input type="hidden" id="titulo_modificar" name="titulo_modificar" value="anadir"/>
			<input type="hidden" id="precio_modificar" name="precio_modificar" value="anadir"/>

<input type="hidden" id="identificador" name="identificador" value="<?php echo $row['id'] ?>"/>
</td>
		<td><input type="text" name="titulo"></td>
		<td><input type="text" name="precio"></td>
		<td><input type="submit" name="anadir" value="Agregar"></td>
	</tr>
</table>
</form>

<?php
$numPags = ceil($numFilas[0]/2);
for($i=0; $i<$numPags; $i++){
$indice = $i+1;
?>
	<a href="con-paginacion.php?paginaALaQueVoy=<?php echo $i; ?>">Tabla <?php echo $indice; ?></a>
<?php
}
?>

</body>
</html>




