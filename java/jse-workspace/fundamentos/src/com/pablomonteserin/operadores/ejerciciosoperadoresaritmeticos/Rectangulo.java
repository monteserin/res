package com.pablomonteserin.operadores.ejerciciosoperadoresaritmeticos;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;

public class Rectangulo {

	public static void main(String[] args) throws NumberFormatException, IOException {
        BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
		System.out.println("Introduce el ancho: ");
		int ancho = Integer.parseInt(br.readLine());
		System.out.println("Introduce el alto: ");
		int alto = Integer.parseInt(br.readLine());
		
		int perimetro = 2*ancho+2*alto;
		int area = ancho*alto;
		System.out.println("El perimetro es: " + perimetro);
		System.out.println("El area es: " + area);

	}

}
