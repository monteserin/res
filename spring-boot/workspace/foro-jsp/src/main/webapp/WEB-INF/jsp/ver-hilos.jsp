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
<li><h2>${hilo.titulo}</h2><p>${hilo.txt}</p></li>
</c:forEach>
</ul>
</body>
</html>