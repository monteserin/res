<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>

<c:set var="operando1" value="${param.operando1}" />
<c:set var="operando2" value="${param.operando2}" />
<c:set var="operador" value="${param.operador}" />


<c:choose>
	<c:when test="${operador == '+'}">
		<c:set var="solucion" value="${operando1+operando2}"></c:set>
    </c:when>
    <c:when test='${operador == "-"}'>
		<c:set var="solucion" value="${operando1-operando2}"></c:set>
    </c:when>
    <c:when test='${operador == "*"}'>
		<c:set var="solucion" value="${operando1*operando2}"></c:set>
    </c:when>
    <c:otherwise>
		<c:set var="solucion" value="${operando1/operando2}"></c:set>
    </c:otherwise>
</c:choose>
<c:out value="${solucion}"></c:out>
<form>
	<input type="text" name="operando1"></input>
	<select name="operador">
		<option value="+">+</option>
		<option value="-">-</option>
		<option value="*">*</option>
		<option value="/">/</option>
	</select>
	<input type="text" name="operando2"></input>
	<input type="submit" name="calcular"></input>
</form>