<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>

<c:if test="${param.botonEnvio!=null}">
boton pulsado!
</c:if>
<form >
	<input type="submit" name="botonEnvio" value="botonEnvio"></input>
</form>


