<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>


<form method="get">
	Introduce tu nombre, por favor<br/><textarea name="nombre"></textarea><br/>
	<input type="submit" />
</form>


<h1>Scriplet JSP</h1>
Buenas tardes, <%=request.getParameter("nombre")%>


<h1>EL</h1>
${param.nombre}


<h1>JSTL</h1>
Hola <c:out value="${param.nombre}"></c:out>
