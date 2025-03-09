<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<form action="/mensajeria-jpa-maven/controlador">

<input type="hidden" name="action" value="escribir-mensajes2" >

<textarea name="mensaje"></textarea>

<ul>
<c:forEach var="usuario" items="${usuarios}">
	<li><input name="mensajes[]" type="checkbox" value="${usuario.id}"><c:out value="${usuario.nombre}" /></li>
</c:forEach>
</ul>

<input type="submit" value="enviar" />
</form>
</body>
</html>