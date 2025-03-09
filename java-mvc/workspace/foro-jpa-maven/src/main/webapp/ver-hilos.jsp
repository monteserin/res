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
<ul>
<c:forEach var="hilo" items="${hilos}">
<li><h2><a href="/foro-jpa-maven/controlador?action=ver-hilo&hilo_id=${hilo.id}">${hilo.nombre_hilo}</a></h2><p>${hilo.txt_hilo}</p></li>
</c:forEach>
</ul>
</body>
</html>