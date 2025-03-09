<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>crear hilo en foto | Pablo Monteserín</title>
</head>
<body>
	<div>
	<form method="post" action="crearHilo2.php">
		<table>
			<tr>
				<td>	
					Nombre del hilo:
				</td>	
				<td>
					<input type="text" name="nombreHilo">
				</td>
			</tr>
			<tr>	
				<td>			
					Texto del hilo:
				</td>
				<td>
					<textarea name="textoHilo"></textarea>
				</td>
			</tr>	
		</table>		
		<input type="submit">
	</form>
	</div>
<?php    include "footer.php"; ?>

</body>
</html>
