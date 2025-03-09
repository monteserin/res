package com.pablomonteserin.metodos.teoria;

public class MetodoQueDevuelveAlgo {

	public String saludar(String parametroEntrada){
		String respuesta = "Buenas tardes " + parametroEntrada;
		return respuesta;
	}
	public static void main(String[] args) {
		MetodoQueDevuelveAlgo b_metodoNoDevuelveNada;
		b_metodoNoDevuelveNada = new MetodoQueDevuelveAlgo();
		String valorDevuelto = b_metodoNoDevuelveNada.saludar("Juan");
		System.out.println(valorDevuelto);
	}
}


