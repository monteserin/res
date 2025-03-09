<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
    <%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
    
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<h1>Hilo: <c:out value="${hilo.nombre_hilo}" />
</h1>
<c:out value="${hilo.txt_hilo}" />

<h2>Comentarios:</h2>

<ul>
<c:forEach var="comentario" items="${comentarios}">
<p><c:out value="${comentario.txt}"/></p>
</c:forEach>
</ul>
<form action="/foro-jpa-maven/controlador">
<input type="hidden" name="action" value="nuevo_comentario" />
<input type="hidden" name="hilo_id" value="${hilo.id}" />

<textarea name="txtComentario"></textarea><br/>
<button>Enviar comentario</button>
</form>

</body>
</html>