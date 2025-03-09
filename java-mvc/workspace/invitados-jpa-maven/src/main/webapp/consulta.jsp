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


<c:forEach var="invitado" items="${invitados}">
	<p><c:out value="${invitado.id}"  /> - <c:out value="${invitado.nombre}" /></p>
</c:forEach>

</body>
</html>