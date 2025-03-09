<%
	String color = "";
	if(request.getParameter("color")!=null){
		color = request.getParameter("color");
	}
%>
<body style="background-color:<%=color %>">
<form method="post" action="#">
	<select name="color">
		<option value="red">Rojo</option>
		<option value="blue">Azul</option>
		<option value="green">Verde</option>
	</select>
	<input type="submit">
</form>
</body>