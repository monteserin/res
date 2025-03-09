package com.pablomonteserin.metodos.teoria;

public class MetodoNoDevuelveNada {

	public void saludar(){
		System.out.println("Buenas tardes!");
	}
	public static void main(String[] args) {
		MetodoNoDevuelveNada b_metodoNoDevuelveNada = new MetodoNoDevuelveNada();
		b_metodoNoDevuelveNada.saludar();
		//La siguiente línea daría error porque el método no devuelve nada
		//String valorDevuelto = b_metodoNoDevuelveNada.saludar();
	}
}

