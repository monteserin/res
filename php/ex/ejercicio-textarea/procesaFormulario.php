<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>procesar formulario textarea PHP | Pablo Monteserín</title>
		<meta name="description" content="En esta página recogemos los datos enviados desde el formulario de la página anterior para procesarlos utilizando PHP">

</head>
<body>

	<?php
	$txt = $_POST['txt'];
	?>

	<input type="text" value="<?php echo $txt; ?>" />

	
</body>
</html>