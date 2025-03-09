<%
	String color = "";
	if(request.getParameter("color")!=null){
		color = request.getParameter("color");
	}
%>
<body style="background-color:<%=color %>">
<form method="post" action="#">
	<select name="color">
		<option value="red" <% if(color.equals("red"))out.println("selected"); %>>Rojo</option>
		<option value="blue" <% if(color.equals("blue"))out.println("selected"); %>>Azul</option>
		<option value="green" <% if(color.equals("green"))out.println("selected"); %>>Verde</option>
	</select>
	<input type="submit">
</form>
</body>