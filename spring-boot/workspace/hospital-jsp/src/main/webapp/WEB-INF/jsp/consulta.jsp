<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
<%@ taglib prefix="fmt" uri="http://java.sun.com/jsp/jstl/fmt" %>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<h1>hemos llegado</h1>

<c:forEach var="paciente" items="${pacientes}"> -->
 	<a href="/consultaPaciente?pacienteId=<c:out value="${paciente.id}"/>"><c:out value="${paciente.id}"/></a> - <c:out value="${paciente.nombre}"/> -  <c:out value="${paciente.apellidos}"/> - <fmt:formatDate pattern="dd-MM-yyyy" value="${paciente.fecha_alta}" /> 
	
 </c:forEach> 


</body>
</html>