<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core"%>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>

	<form action="/caja/Controller">
		<label for="nombre">Nombre del cliente</label> <input id="nombre"
			type="text" name="nombre" value="${nombre}" /> <br /> <label
			for="mat">Material de la caja</label> <select id="mat"
			name="material">
			<option value="-1">Seleccione una opción por favor</option>
			<option value="madera"
				<c:if test="${material eq 'madera'}"> selected </c:if>>Madera</option>
			<option value="plastico"
				<c:if test="${material eq 'plastico'}"> selected </c:if>>Plástico</option>
			<option value="carton"
				<c:if test="${material eq 'carton'}"> selected </c:if>>Cartón</option>
		</select><br /> <label>Seleccione una opción</label> <br /> <input type="radio"
			name="size" value="Pequeño"
			<c:if test="${size eq 'Pequeño'}"> checked </c:if> />Pequeño <br />
		<input type="radio" name="size" value="Mediano"
			<c:if test="${size eq 'Mediano'}"> checked </c:if> />Mediano <br />
		<input type="radio" name="size" value="Grande"
			<c:if test="${size eq 'Grande'}"> checked </c:if> />Grande <br /> <br />
		<label for="comments">Comentarios</label>
		<textarea id="comments" name="comments">${comments}</textarea><br/>

		<button>Enviar</button>
	</form>

	${respuesta}

</body>
</html>