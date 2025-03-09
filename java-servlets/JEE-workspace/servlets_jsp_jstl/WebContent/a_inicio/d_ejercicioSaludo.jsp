<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>

<h1>Scriplet JSP</h1>
<% String nombre="Jose"; %>
Buenas tardes, <%=nombre%>


<h1>JSTL</h1>
<c:out value="${nombre}"></c:out>
<c:set var="nombre">Jose</c:set>
<c:set var="nombre" value="Juan"></c:set>

Hola <c:out value="${nombre}"></c:out>
