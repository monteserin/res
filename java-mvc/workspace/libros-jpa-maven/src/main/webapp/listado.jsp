<%@ page language="java" contentType="text/html; charset=UTF-8" pageEncoding="UTF-8"%>
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core"%>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Insert title here</title>
	<style>
		.migrid {
			display: grid;
			grid-template-columns: repeat(5, 150px);
		}
		.migridWrapper{
			display:grid;
			grid-template-columns: 600px 100px;
		}
		button{
			display:block;
			width:100%
		}
	</style>
</head>
<body>
	<c:forEach var="libro" items="${libros}">
		<div class="migridWrapper">
			<form class="migrid" action="/libros-jpa-maven/controlador">
				<div>${libro.id}<input type="hidden" name="idextra" value="${libro.id}" /></div>
				<input type="text" value="${libro.titulo}" name="titulo" />
				<input type="text" value="${libro.precio}" name="precio" />
				<button>Modificar</button><input type="hidden" name="action" value="modificar" />
			</form>
			<form action="/libros-jpa-maven/controlador">
				<button>Borrar</button>
				<input type="hidden" name="idextra" value="${libro.id}" />
				<input type="hidden" name="action" value="baja" />
			</form>
		</div>
	</c:forEach>
	<form class="migrid" action="/libros-jpa-maven/controlador">
		<div></div>
		<input id="action" type="hidden" name="action" value="alta">
		<input type="text" name="titulo" placeholder="Título del libro">
		<input type="text" name="precio" placeholder="Precio del libro">
		<button>Alta</button>
	</form>
</body>
</html>