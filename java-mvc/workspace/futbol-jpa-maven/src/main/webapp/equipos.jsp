<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<style>
.equipo{
width:200px;
height:60px;
border:1px solid black;
display:flex;
align-items:flex-start
}
.equipos{
display:flex;
flex-wrap:wrap;
width:1024px;
margin:auto
}
.equipo_datos{
display:flex
}
</style>
</head>
<body>
<div class="equipos">
<c:forEach var="equipo" items="${equipos}">
	<div class="equipo">
		<a href="/futbol-jpa-maven/controlador?action=consulta_equipo_por_id&equipo_cod=${equipo.equipo_cod}&foto_equipo=${equipo.foto_equipo}&foto_escudo=${equipo.foto_escudo}"><img src="/futbol-jpa-maven/imagenes-futbol/${equipo.foto_escudo}" /></a>
		<div class="equipo_datos">
			<c:out value="${equipo.nombre}" /> <br>
					<c:out value="${equipo.fundacion}" /><br>
					<c:out value="${equipo.presidente}" />		
		</div>
	</div>
</c:forEach>
</div>
</body>
</html>