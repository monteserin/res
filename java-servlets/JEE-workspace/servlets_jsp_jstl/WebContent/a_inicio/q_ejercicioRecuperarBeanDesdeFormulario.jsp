<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
<%@ page contentType="text/html;charset=utf-8" %>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<form method="get" action="/servlets_jsp_jstl/C_recuperarBeanDesdeFormulario">
	DNI: <input type="text" name="dni"/><br/>
	Nombre: <input type="text" name="nombre"/><br/>
	Direccion: <input type="text" name="direccion"/><br/>
	<input type="submit" value="enviar"/>
</form>
