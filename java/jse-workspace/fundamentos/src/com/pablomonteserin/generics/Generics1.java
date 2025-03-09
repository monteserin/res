package com.pablomonteserin.generics;

public class Generics1 {
		public static void main(String[] args) {
			Calculadora<Integer> calculadora = new Calculadora<Integer>();
			calculadora.sumar(4, 5);
		}
	}

	// El tipo de dato generico E (valdria cualquier nombre de clase inexistente)
	// podra ser sustituido dentro de la clase por una clase de
	// cualquier tipo, que sera definido al declarar e instanciar la clase
	class Calculadora<T> {
		public double sumar(T n1, T n2) {
			 if (n1 instanceof Number && n2 instanceof Number) {
		            return (Double.parseDouble(n1.toString()) +  Double.parseDouble(n2.toString()));
		        }	 
			return 0;
		}

		// Un metodo estatico no puede acceder a un tipo de dato generico
		// Cuando declaro un objeto de la clase calculadora defino el tipo de dato
		// que va a sustituir al generico. Sin embargo un
		// metodo estatico es cargado en memoria antes de declarar la clase que lo
		// contiene y por tanto no sabemos que tipo de dato va a
		// sustituir al generico, ya que este tipo de dato es definido al hacer la
		// declaracion
		//public static void sumar2(E e, E e2) {}
	
}
