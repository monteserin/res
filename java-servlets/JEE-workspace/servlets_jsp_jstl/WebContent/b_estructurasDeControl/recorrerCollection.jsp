<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core"%>

<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
	<%
		com.pablomonteserin.model.Persona persona1 = new com.pablomonteserin.model.Persona(
				"dni1", "nombre1", "direccion1");
		com.pablomonteserin.model.Persona persona2 = new com.pablomonteserin.model.Persona(
				"dni1", "nombre2", "direccion1");
		com.pablomonteserin.model.Persona persona3 = new com.pablomonteserin.model.Persona(
				"dni1", "nombre3", "direccion1");
		com.pablomonteserin.model.Persona persona4 = new com.pablomonteserin.model.Persona(
				"dni1", "nombre4", "direccion1");

		java.util.Collection collection = new java.util.ArrayList();
		collection.add(persona1);
		collection.add(persona2);
		collection.add(persona3);
		collection.add(persona4);

		request.setAttribute("collection", collection);
	%>
	<table border="1px">
		<tr>
			<th>dni</th>
			<th>nombre</th>
			<th>direccion</th>
		</tr>
		<c:forEach var="persona" items="${requestScope.collection}">
			<tr>
				<td>${persona.dni}</td>
				<td>${persona.nombre}</td>
				<td>${persona.direccion}</td>
		</c:forEach>
	</table>

<ul>
	<c:forEach var="persona" items="${requestScope.collection}"
		varStatus="status">
		<li>item <c:out value="${status.count}" /> - 
				 <c:out value="${status.index}" /> 
			<c:if test="${status.first}">(this is the first item!)</c:if> 
			<c:if test="${status.last}">(this is the last item!)</c:if>
		</li>
	</c:forEach>
</ul>
</body>
</html>