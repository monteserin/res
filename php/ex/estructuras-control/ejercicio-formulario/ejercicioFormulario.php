<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>procesa ejercicio formulario en PHP | Pablo Monteserín</title>
		  <meta name="description" content="Esta página recoge los datos enviados desde un formulario, los procesa y los muestra concatenados">

</head>
<body>
	
<?php
$txt=("Mensaje montado!. El/la señor/a ".$_POST['nombre'].", ha solicitado comprar una caja de tamaño ".$_POST['radioTamano']." y material ".$_POST['material'].". ".$_POST['textArea']);
       
echo $txt; 
?>

</body>
</html>