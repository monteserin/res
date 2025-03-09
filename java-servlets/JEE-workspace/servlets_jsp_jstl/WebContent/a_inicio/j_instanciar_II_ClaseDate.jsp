<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
<%@ taglib prefix="bean" uri="http://java.sun.com/jsp/jstl/fmt" %>


<h1>Con scriplets JSP</h1>
<%= new java.util.Date() %>
<%@page import="java.util.Date"%>
<%= new Date() %>

<h1>Con JSP Standard Action y JSTL</h1>
<jsp:useBean id="now" class="java.util.Date" />
<c:out value="${now}"></c:out>


<c:out value="${java.util.Date}"></c:out>


<jsp:useBean id="now2" class="java.util.Date" />
<c:out value="${now2}"></c:out>