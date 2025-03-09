<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>

<h1>Scriptlet JSP</h1>
<%
	int dato1 = 3;
	int dato2 = 5;
	if(dato2 > dato1){
		out.println("dato2 es mayor que dato1");
	}else{
		out.println("dato2 es mayor que dato1");		
	}
%>


<h1>EL</h1>
${5 gt 3}- 1 -${5 > 3} - 2 - ${5 lt 3} - 3 -${5 < 3} - 4 -${5 eq 1}	


<h1>JSTL</h1>
<c:if test="${5>3}">
5 es mayor que 3!
</c:if>


