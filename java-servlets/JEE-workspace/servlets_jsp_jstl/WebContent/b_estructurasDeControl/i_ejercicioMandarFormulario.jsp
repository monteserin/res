<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<%
String salida = "";
if(request.getParameter("botonEnvio")!=null){
	String nombre = request.getParameter("nombre");
	String material = request.getParameter("material");
	String tamano = request.getParameter("tamano");
	String texto = request.getParameter("texto");
	salida = "Mensaje montado! El/la señor/a "+nombre +", ha solicitado "+
			"comprar una caja de tamaño "+ tamano + " y material "+material +
			". "+texto;
}
%>

<form method="post" action="#">
	Nombre del cliente: <input type="text" name="nombre"></input><br/>
	Material de la caja:
	<select name="material">
		<option value="plastico">Plastico</option>
		<option value="madera">Madera</option>
	</select><br/>
	Seleccione un tamano para la caja:<br/>
	<input type="radio" name="tamano" value="pequeno"></input>Pequeno<br/>
	<input type="radio" name="tamano" value="mediano"></input>Mediano<br/>
	<input type="radio" name="tamano" value="grande"></input>Grande<br/><br/>
	Comentarios<br/>
	<textarea name="texto"></textarea><br/>
	<input type="submit" name="botonEnvio" value="Enviar formulario"></input>
</form>
<%=salida%>