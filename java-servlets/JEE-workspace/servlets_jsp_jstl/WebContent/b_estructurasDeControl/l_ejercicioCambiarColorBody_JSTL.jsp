<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>


	<c:set var="color" value="${param.color}" />

<body style="background-color:<c:out value="${color}"/>">
<form method="post">
	<select name="color">
		<option value="red">Rojo</option>
		<option value="blue">Azul</option>
		<option value="green">Verde</option>
	</select>
	<input type="submit">
</form>
</body>