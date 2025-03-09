<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
<%@ taglib prefix="fmt" uri="http://java.sun.com/jsp/jstl/fmt" %>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<h1>hemos llegado</h1>

<form action="/modificaPaciente">

<input type="hidden" name="identificador" value="${paciente.id}">

<input type="text" name="nombre" placeholder="nombre" value="${paciente.nombre}">

<input type="text" name="apellidos" placeholder="apellidos" value="${paciente.apellidos}">

<input type="text" name="fecha_alta" value="<fmt:formatDate pattern="dd-MM-yyyy" value="${paciente.fecha_alta}" />"/>

<button>Enviar</button>
</form>


</body>
</html>