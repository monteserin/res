package com.pablomonteserin.comparacionesycolecciones;

//Si para usar genéricos en una clase usamos una palabra reservada,
//dicha palabra reservada no funcionará en nuestro código
public class Generics<String> {
	String valor;

	Generics() {
		// La siguiente línea daría error
		 valor.hashCode();
	}
}
