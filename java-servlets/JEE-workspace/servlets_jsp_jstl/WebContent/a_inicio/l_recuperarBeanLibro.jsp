<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
<%@page import="com.pablomonteserin.model.Libro"%>


<h1>JSP Scriplet</h1>
<% Libro libroRecuperado = (Libro)request.getAttribute("libro"); %>
<% out.print(libroRecuperado.getTitulo()); %><br/>
<%=libroRecuperado.getTitulo()%><br/>


<h1>EL</h1>
${requestScope.libro.titulo}

<h1>JSTL</h1>
<c:out value="${requestScope.libro.titulo}"></c:out>