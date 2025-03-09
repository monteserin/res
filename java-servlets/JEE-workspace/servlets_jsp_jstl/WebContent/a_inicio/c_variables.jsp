<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>

<h1>JSP Scriplet</h1>
<%
	String texto = "Soy una cadena";
	int i = 5;
	int j = 3;
%>
<%=texto %><br/>
<%=i %>+<%=j %>=<br/>
<%=i+j %><br/>
<%=i+""+j %>


<h1>JSTL</h1>
<c:set var="nombre" value="valor" />
<c:out value="${nombre}" />

<h1>EL</h1>
${nombre}


