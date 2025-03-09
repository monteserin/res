package com.pablomonteserin.metodos.ejerciciossinreturn;

public class SiEsoEsCierto {

	public void esCierto(boolean v) {
		if(v) {
			System.out.println("Sí, eso es cierto");
		}else {
			System.out.println("No, eso es falso");
		}
	}
	
	public static void main(String[] args) {
		SiEsoEsCierto c = new SiEsoEsCierto();
		c.esCierto(false);
	}

}
