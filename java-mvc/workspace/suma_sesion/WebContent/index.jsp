<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Insert title here</title>
</head>
<body>


<form action="Controlador">
<input type="text" name="n1">
<input type="text" name="n2">
<input type="submit">
</form>


<p>Resultado Request: ${rRequest} </p>

<p>Resultado Session: ${rSession}</p> 

<p>Resultado Contexto: ${rContexto}</p>

<a href="Controlador?action=limpiar">Limpias session</a>

<form action="Controlador">
<input type="submit">
<input type="hidden" name="action" value="limpiar">
</form>
</body>
</html>