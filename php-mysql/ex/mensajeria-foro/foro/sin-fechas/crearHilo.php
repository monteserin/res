<?php
session_start();
include "footer.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>crear hilo en foro PHP | Pablo Monteserín</title>
                <meta name="description" content="Página de creación de un hilo del foro hecho con PHP y MySQL">

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
						<input type="text" name="nombre_hilo">
					</td>
				</tr>
				<tr>	
					<td>			
						Texto del hilo:
					</td>
					<td>
						<textarea name="texto_hilo"></textarea>
					</td>
				</tr>
			</table>			
			<input type="submit">
		</form>
	</div>

	
</body>
</html>
