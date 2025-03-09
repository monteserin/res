<%
	if(request.getParameter("botonEnvio")!=null){
		out.println(request.getParameter("campo"));
	}else{
		out.println("boton no pulsado");
	}
%>

<form method="post" action="#">
	<input type="text" name="campo"></input>
	<input type="submit" name="botonEnvio" value="botonEnvio"></input>
</form>