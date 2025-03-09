<?php 
if(isset($_REQUEST["enviar"])){
	$nombre = $_REQUEST["nombre"];
	echo $nombre. "ha enviado un mail";
}
?>

<form action="index.php">
	<input type="hidden" name="p" value="contact">
	<label><?=$name ?></label><input type="text" name="nombre"> <br/><br/>
	<label><?=$msg ?></label><br/>
	<textarea></textarea><br/><br/>
	<input type="submit" name="enviar" value="<?=$submit ?>">

</form>