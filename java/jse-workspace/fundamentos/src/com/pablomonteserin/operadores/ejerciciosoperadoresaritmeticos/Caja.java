package com.pablomonteserin.operadores.ejerciciosoperadoresaritmeticos;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;

public class Caja {

	public static void main(String[] args) throws IOException {
        BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
		System.out.println("Introduzca su nombre, por favor");
		String nombre = br.readLine();
		
		System.out.println("Introduzca el material de la caja, por favor: ");
		String material = br.readLine();
		
		System.out.println("Introduzca las dimensiones de la caja, por favor: ");
		String dimensiones = br.readLine();
		
		System.out.println("Introduzca un comentario, por favor: ");
		String comentario = br.readLine();
		
		System.out.println(nombre + " ha pedido una caja de " +material+" con unas dimensiones "+dimensiones+"."+comentario);
	}
}
