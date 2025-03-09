<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<div>
<c:forEach var="libro" items="${libros}">
<div style="display:grid; grid-template-columns: 500px 200px">
	<form action="/modificarlibro">
	<input type="hidden" name="id" value="${libro.id}" />
	<input type="text" name="titulo" value="${libro.titulo}"/> -
	<input type="text" name="precio" value="${libro.precio}">
	<button>Modificar</button> </form>
	
	</form>
<form action="/deletelibro">
<input type="hidden" name="id" value="${libro.id}"><button>Borrar</button>
</form>
</div>
</c:forEach>
</div>
<form action="/create-libro">
<input type="text" name="titulo"><input type="text" name="precio"><button>Añadir</button>



</body>
</html>