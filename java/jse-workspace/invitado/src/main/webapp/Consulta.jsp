<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Consulta</title>
<style type="text/css">

*{
margin:0;
padding:0;

}

body{
width: 100%;
height: 100%;
display: flex;
justify-content: center;
}

body section{

background-color: pink; 
border: 1px solid; 
width: 30%; 
height: 80vh;
text-align: center;
display: flex;
flex-direction: column;
justify-content: center;

}


</style>
</head>
<body>

<section>

<h1>Consulta</h1>

<table>

<tr>
<th>invitado</th>  

</tr>
	<c:forEach var="invitado" items="${invitadolist}">
     <label>nombre</label>
	<c:out value="${invitado.nombre}"></c:out><br>
	 


</table>			

	</c:forEach>

<a href="Index.jsp">Volver a inicio</a> 

</section>



</body>
</html>