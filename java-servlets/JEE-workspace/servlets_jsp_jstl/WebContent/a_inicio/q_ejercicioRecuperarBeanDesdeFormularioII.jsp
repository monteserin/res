<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
<%@ page contentType="text/html;charset=utf-8" %>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<%@page import="com.pablomonteserin.model.Persona"%>
<h1>JSP Scriplet</h1>
<% Persona persona =(Persona) request.getAttribute("persona");%>
El señor <%=persona.getNombre() %>
<%=persona.getDni() %> vive en la direccion
<%=persona.getDireccion() %>

<h1>EL</h1>
El señor ${requestScope.persona.nombre} con dni 
${requestScope.persona.dni} vive en la direccion
${requestScope.persona.direccion}

<h1>JSTL</h1>
El señor <c:out value="${requestScope.persona.nombre}"></c:out>
con dni <c:out value="${requestScope.persona.dni}"></c:out>
vive en la dirección <c:out value="${requestScope.persona.direccion}"></c:out>