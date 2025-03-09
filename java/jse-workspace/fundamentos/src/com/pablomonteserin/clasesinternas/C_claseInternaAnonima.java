package com.pablomonteserin.clasesinternas;

public class C_claseInternaAnonima {

	public static void main(String args[]){
		Comida2 comida = new Comida2() {
			public void comer() {
				System.out.println("Método \"comer\" de la clase Comida2 sobreescrito");
			}
		};
		comida.comer();
	}
}
class Comida2 {
	public void comer() {
		System.out.println("Comiendo");
	}
}


