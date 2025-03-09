<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
	<form action="/createMensajes">


		<textarea name="texto"></textarea>

		<ul>
			<c:forEach var="usuario" items="${usuarios}"  varStatus="status">
				<li><input name="ids[${status.index}]" type="checkbox" value="${usuario.id}">
				<c:out value="${usuario.nombre}" /></li>
			</c:forEach>
		</ul>

		<input type="submit" value="enviar" />
	</form>
</body>
</html>