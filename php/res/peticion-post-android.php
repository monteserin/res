<?php 
header("Access-Control-Allow-Origin: *"); 
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
  header("Content-type: text/plain");
	echo "Llega al fichero";
if(isset($_POST['option']) && $_POST['option'] == 3 ){
	echo "parametro enviado: ";
	echo $_POST['option'];

	echo "Se mete en el if";
}
?>
