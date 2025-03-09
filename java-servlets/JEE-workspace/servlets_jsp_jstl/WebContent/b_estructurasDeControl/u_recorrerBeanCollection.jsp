<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core"%>

<%
	com.pablomonteserin.model.Persona persona1 = new com.pablomonteserin.model.Persona(
			"dni1", "nombre1", "direccion1");
	com.pablomonteserin.model.Persona persona2 = new com.pablomonteserin.model.Persona(
			"dni2", "nombre2", "direccion2");
	com.pablomonteserin.model.Persona persona3 = new com.pablomonteserin.model.Persona(
			"dni3", "nombre3", "direccion3");
	com.pablomonteserin.model.Persona persona4 = new com.pablomonteserin.model.Persona(
			"dni4", "nombre4", "direccion4");
	java.util.Collection<com.pablomonteserin.model.Persona> personas = new java.util.ArrayList<com.pablomonteserin.model.Persona>();
	personas.add(persona1);
	personas.add(persona2);
	personas.add(persona3);
	personas.add(persona4);
	request.setAttribute("personas", personas);
%>
<h1>JSTL</h1>
<table border="1px">
	<tr>
		<th>Dni:</th>
		<th>Nombre:</th>
		<th>Direccion</th>
	</tr>
	<c:forEach var="persona" items="${personas}">

		<tr>		
			<td><c:out value="${persona.dni}"></c:out></td>
			<td><c:out value="${persona.nombre}"></c:out></td>
			<td><c:out value="${persona.direccion}"></c:out></td>
		</tr>
	</c:forEach>
</table>



<c:forEach var="libro" items="${libros}">

	<c:out value="${libro.titulo}"></c:out>

</c:forEach>


