<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Baja</title>
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

background-color: yellow; 
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
<form action="/invitado/Controller">

<input type="hidden" name="action" value="baja">
 
 
 <label >Introduce el id para eliminar el invitado</label><br>
<input type="text" name="invitadoeliminar"><br>
 
  
  <input type="submit" value="Submit">

</form>

<a href="Index.jsp">Volver a inicio</a> 

</section>

</body>
</html>