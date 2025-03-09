<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Index</title>

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


body section ul{


list-style: none;

}

</style>

</head>



<body>

<section>



<h1>Lista de invitados</h1>

<ul>

<li><a href="/invitado/Controller?action=consulta">Consulta</a></li>
<li><a href="Alta.jsp">Alta</a></li>
<li><a href="Baja.jsp">Baja</a></li>



</ul>



</section>




</body>
</html>