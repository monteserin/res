<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
<c:if test="${param.botonEnvio!=null}">
	<c:set var="nombre" value="${param.nombre}"></c:set>
	<c:set var="material" value="${param.material}"></c:set>
	<c:set var="tamano" value="${param.tamano}"></c:set>
	<c:set var="texto" value="${param.texto}"></c:set>
	Mensaje montado! El/la señor/a <c:out value="${nombre}" />, ha solicitado 
	comprar una caja de tamaño <c:out value="${tamano}" /> y material <c:out value="${material}"/>
			.<c:out value="${param.texto}"/>
</c:if>

<form method="post" action="#">
	Nombre del cliente: <input type="text" name="nombre"></input><br/>
	Material de la caja:
	<select name="material">
		<option value="plastico">Plastico</option>
		<option value="madera">Madera</option>
	</select><br/>
	Seleccione un tamano para la caja:<br/>
	<input type="radio" name="tamano" value="pequeno"></input>Pequeno<br/>
	<input type="radio" name="tamano" value="mediano"></input>Mediano<br/>
	<input type="radio" name="tamano" value="grande"></input>Grande<br/><br/>
	Comentarios<br/>
	<textarea name="texto"></textarea><br/>
	<input type="submit" name="botonEnvio" value="Enviar formulario"></input>
</form>
