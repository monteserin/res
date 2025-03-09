<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>

<h1>JSP</h1>
<%
	for(int i=0; i<1000; i++){
		if(i%2==0){
			out.println(i);			
		}
	}
%>
<h1>JSTL</h1>
<c:forEach begin="0" end="999" step="1" var="num">
	<c:if test="${num%2==0}">
		<c:out value="${num}"></c:out>
	</c:if>
</c:forEach>