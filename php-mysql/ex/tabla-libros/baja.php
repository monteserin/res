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
	}
	$sql = "select * from libro";
	$result = mysqli_query($conexionLibreria, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>baja en tabla de libros en PHP | Pablo Monteserín</title>
	                <meta name="description" content="Borrado de un registro de la tabla libros de una base de datos MySQL utilizando PHP">

</head>
<body>
	<h1>Borrado de un registro de una base de datos MySQL con PHP</h1>

<script type="text/javascript">
function borrar(id){
	document.getElementById("identificador").value = id;
	document.getElementById("action").value = "eliminar";
	alert(document.getElementById("action").value);
	document.getElementById("formulario").submit();
}
</script>
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
			<input type="text" name="titulo" value="<?=$row['titulo'] ?>" />
		</td>
		<td>
			<input type="text" name="precio" value="<?=$row['precio'] ?>" />
		</td>
		<td>

			<input type="button" onclick="borrar(<?=$row['id'] ?>)"  value="eliminar" />
		</td>

	</tr>
<?php

	}
?>
	<tr>
		<td style="background:grey"><input type="hidden" id="action" name="action" value="anadir"/>
<input type="hidden" id="identificador" name="identificador" value="<?php echo $row['id'] ?>"/>
</td>
		<td><input type="text" name="titulo"></td>
		<td><input type="text" name="precio"></td>
		<td><input type="submit" name="anadir" value="Agregar"></td>
	</tr>
</form>
</table>



</body>
</html>