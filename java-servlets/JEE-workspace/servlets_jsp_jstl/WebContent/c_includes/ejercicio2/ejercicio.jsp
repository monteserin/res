<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
     <%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
    
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<div style="width:1000px; height:500px; margin:auto">
	<div id="botonera" style="width:160px; height:460px; float:left; background:pink; padding:20px">
		<a href="ejercicio.jsp?pag=1">link 1</a><br>
		<a href="ejercicio.jsp?pag=2">link 2</a>
	</div>
	<div style="width:800px; height:500px; float:left; background:blue; padding:0px">
		<c:choose>
			<c:when test="${param.pag == 1}">
				<c:import url="pagina1.html" />
			</c:when>
			<c:when test="${param.pag == 2}">
				<c:import url="pagina2.html" />
			</c:when>
		</c:choose>
	</div>
</div>
</body>
</html>