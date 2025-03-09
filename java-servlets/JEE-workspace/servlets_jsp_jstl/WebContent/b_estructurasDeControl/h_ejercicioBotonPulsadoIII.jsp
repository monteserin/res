<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
 
 
 <c:choose>
        <c:when test="${param.botonEnvio == null}">
			El boton de envio no fue pulsado.
        </c:when>
        <c:otherwise>
			Botón pulsado
        </c:otherwise>
</c:choose>

<form method="post" action="#">
	<input type="text" name="campo"></input>
	<input type="submit" name="botonEnvio" value="botonEnvio"></input>
</form>