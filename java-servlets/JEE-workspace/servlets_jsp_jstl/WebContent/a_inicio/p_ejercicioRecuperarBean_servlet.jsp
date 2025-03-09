<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
<%@page import="com.pablomonteserin.model.Persona"%>


<h1>JSP Scriplet</h1>
<% Persona personaRecuperada = (Persona)request.getAttribute("persona"); %>
<% out.print(personaRecuperada.getNombre()); %><br/>
<%=personaRecuperada.getNombre()%><br/>


<h1>EL</h1>
${requestScope.persona.nombre}

<h1>JSTL</h1>
<c:out value="${requestScope.persona.nombre}"></c:out>