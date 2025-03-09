<%	
	int resultado=0;
	if(request.getParameter("calcular")!=null){
		String operador = request.getParameter("operador");
		int operando1 = Integer.parseInt(request.getParameter("operando1"));
		int operando2 = Integer.parseInt(request.getParameter("operando2"));
		if(operador.equals("+")){
			resultado = operando1 + operando2;
		}else if(operador.equals("-")){
			resultado = operando1 - operando2;
		}else if(operador.equals("*")){
			resultado = operando1 * operando2;
		}else if(operador.equals("/")){
			resultado = operando1 / operando2;
		}
		Integer r = new Integer(resultado);
	}
	out.println(String.valueOf(resultado));
%>
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