<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>

<form method="post">
	<select name="combo">
		<option value="juan">Juan</option>
		<option value="pp">Pp</option>
		<option value="rodolfo">Rodolfo</option>
	</select>
	<input type="submit"></input>
</form>

<h1>JSP</h1>
<% 
	String texto = request.getParameter("combo");
%>
<%=texto%>
<h1>EL</h1>
${param.combo}
<h1>JSTL</h1>
<c:out value="${param.combo}"></c:out>