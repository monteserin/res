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

<div class="equipos">
<div>
<img src="imagenes-futbol/${equipo.foto_escudo}" />
<img src="imagenes-futbol/${equipo.foto_equipo}" /> 
</div>
<c:forEach var="jugador" items="${jugadores}">
			<c:out value="${jugador.nombre}" /> <br>
		</div>
	</div>
</c:forEach>

</div>


</body>
</html>