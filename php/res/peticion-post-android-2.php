<?php 
header("Access-Control-Allow-Origin: *"); 
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
  header("Content-type: text/plain");
	echo "Llega al fichero";
if(isset($_POST['nombre'])){
	echo "Nombre enviado enviado: ";
	echo $_POST['nombre'];

	echo "Apellidos enviado enviado: ";
	echo $_POST['apellidos'];
}
?>
