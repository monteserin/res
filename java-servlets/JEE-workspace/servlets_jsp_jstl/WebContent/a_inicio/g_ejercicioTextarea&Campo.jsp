<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>


<form method="get">
	Introduce tu nombre, por favor<br/><textarea name="nombre"></textarea><br/>
	<input type="submit" />
</form>


<input type="text" value="<%=request.getParameter("nombre")%>" />
<input type="text" value="${param.nombre}" />
<input type="text" value="<c:out value="${param.nombre}" />" />
