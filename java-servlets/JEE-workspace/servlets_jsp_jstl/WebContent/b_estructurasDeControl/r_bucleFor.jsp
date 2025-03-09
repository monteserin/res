<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>

<h1>Scriplet JSP</h1>
<%
	for(int i=0; i<10; i++){
		out.println(i);
	}
%>
<h1>JSTL</h1>
<c:forEach begin="0" end="9" step="1" var="num">
	<c:out value="${num}"></c:out>
</c:forEach>
