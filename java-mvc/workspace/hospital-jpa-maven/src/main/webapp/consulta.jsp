<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>

<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c" %>
<%@ taglib prefix="fmt" uri="http://java.sun.com/jsp/jstl/fmt" %>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<ul>
<c:forEach var="paciente" items="${pacientes}">
<li><a href="/hospital-jpa-maven/controlador?action=consulta_paciente_por_id&id=${paciente.id}"><c:out value="${paciente.id}" /></a> - <c:out value="${paciente.nombre}" /> - <c:out value="${paciente.apellidos}" /> - <fmt:formatDate value="${paciente.fecha_alta}" pattern="dd-MM-yyyy"/></li>		
</c:forEach>
</ul>
</body>
</html>