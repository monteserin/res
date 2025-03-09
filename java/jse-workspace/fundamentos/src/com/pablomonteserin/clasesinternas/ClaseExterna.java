package com.pablomonteserin.clasesinternas;

public class ClaseExterna {
	private String nombreExt ="Juan";
	class ClaseInterna{
		private String nombreInt ="Pepe";
		public void mostrarNombre(){
			System.out.println(nombreInt);
			System.out.println(nombreExt);

		}
	}
	public void mostrarNombre(){
		System.out.println("Juan");
	}
	public static void main(String[] args) {
		//Puedo acceder a los variables miembro privadas de la clase interna, pero no de la externa
		ClaseExterna claseExterna = new ClaseExterna();
		ClaseInterna claseInterna = claseExterna.new ClaseInterna();
		//Puedo acceder a los metodos de la clase externa
		claseInterna.mostrarNombre();
	}
}





 