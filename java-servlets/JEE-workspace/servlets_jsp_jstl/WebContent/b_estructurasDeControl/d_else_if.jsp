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


<h1>JSTL</h1>

 <c:choose>
        <c:when test='${5 > 3}'>
			5 es mayor que 3!
        </c:when>
        <c:otherwise>
			5 no es mayor q 3.
        </c:otherwise>
</c:choose>



