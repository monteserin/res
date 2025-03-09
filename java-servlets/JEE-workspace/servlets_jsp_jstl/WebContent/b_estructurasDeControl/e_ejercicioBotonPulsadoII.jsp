<%
	if(request.getParameter("botonEnvio")!=null){
		out.println("boton pulsado");
	}else{
		out.println("El boton de envio no fue pulsado");
	}
%>

<form method="post" action="#">
	<input type="submit" name="botonEnvio" value="botonEnvio"></input>
</form>