<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="description" content="Mostramos el valor enviado desde un textarea de un formulario a esta página utilizando PHP">

</head>
<body>
	


<?php
	$combo = $_POST['txt'];
?>

<input type="text" value="<?php echo $combo; ?>">

</body>
</html>