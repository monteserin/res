package com.pablomonteserin.metodos.teoria;

public class MetodoNoDevuelveNada_conParametros {

	public void saludar(String nombre){
		System.out.println("Buenas tardes " + nombre + "!");
	}
	public static void main(String[] args) {
		MetodoNoDevuelveNada_conParametros b_metodoNoDevuelveNada;
		b_metodoNoDevuelveNada = new MetodoNoDevuelveNada_conParametros();
		b_metodoNoDevuelveNada.saludar("Juan");
		//La siguiente línea daría error porque el método no devuelve nada
		//String valorDevuelto = b_metodoNoDevuelveNada.saludar("Juan");
	}
}

