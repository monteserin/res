<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>

<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c" %>
<%@ taglib prefix="fmt" uri="http://java.sun.com/jsp/jstl/fmt" %>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>

<form action="/hospital-jpa-maven/controlador">
<input type="hidden" name="action" value="modificacion">
<input type="hidden" name="identification" value="${paciente.id}" }>

<label for="nombre">Nombre:</label><input type="text" name="nombre" value="${paciente.nombre}"> <br>
<label for="apellidos">Apellido</label><input type="text" name="apellidos" value="${paciente.apellidos}"><br>
<input type="date" value="<fmt:formatDate pattern="yyyy-MM-dd" value="${paciente.fecha_alta}" />" name="fecha_alta">
<button>Modificar</button>
</form>

<form action="/hospital-jpa-maven/controlador">
<input type="hidden" name="action" value="baja">
<input type="hidden" name="identification" value="${paciente.id}" />
<button>Borrar</button>
</form>
</body>
</html>