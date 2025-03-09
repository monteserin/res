<%
	if(request.getParameter("botonEnvio")!=null){
		out.println("boton Pulsado");
	}
%>

<form method="post" action="#">
	<input type="submit" name="botonEnvio" value="botonEnvio"></input>
</form>


