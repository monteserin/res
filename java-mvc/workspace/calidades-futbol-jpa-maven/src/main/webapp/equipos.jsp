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
<form action="/calidades-futbol-jpa-maven/controlador">
<input type="hidden" name="action" value="consulta_equipo_por_id">

<select name="equipo_cod" onchange="this.form.submit()">
<option>Seleccione una opción</option>
<c:forEach var="equipo" items="${equipos}">
<option value="${equipo.equipo_cod}">${equipo.nombre}</option>
</c:forEach>
</select>
</form>


<div>
<c:forEach var="jugador" items="${jugadores}">
<p>${jugador.nombre}</p>
</c:forEach>
</div>

<table border="1px">
<tr>
<c:forEach var="jugador" items="${jugadores}">
<td style="vertical-align:bottom"><div style="width:20px; height:${jugador.calidad}rem; background:black;"></div></td>
</c:forEach>
</tr>

<tr>
<c:forEach var="jugador" items="${jugadores}">
<td>${jugador.numero_camiseta}</td>
</c:forEach>
</tr>
</table>
</body>
</html>