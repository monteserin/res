<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>

<c:set var="color" value="${param.color}"></c:set>

<body style="background-color:<c:out value="${color}" />">
<form method="post" action="#">
	<select name="color">
		<option value="red" <c:if test="${color=='red'}">selected</c:if>>Rojo</option>
		<option value="blue" <c:if test="${color=='blue'}">selected</c:if>>Azul</option>
		<option value="green" <c:if test="${color=='green'}">selected</c:if>>Verde</option>
	</select>
	<input type="submit">
</form>
</body>


