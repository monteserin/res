package com.pablomonteserin.lecturadatos.ahorcado;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.util.Random;

public class Main {
	public static void main(String[] args) throws IOException {
		String palabraSecreta = getPalabraSecreta();
		char [] palabraGuiones = getGuionesFromPalabra(palabraSecreta);
		boolean juegoTerminado = false;
        BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
		int intentos = 3;
		
		do {
			System.out.println("Te quedan " + intentos + " intentos");
			System.out.println(palabraGuiones);
			System.out.println("Introduce una letra");
			char letra = br.readLine().charAt(0);
			boolean algunaLetraAcertada = false;
			for(int i =0; i<palabraSecreta.length(); i++) {
				if(palabraSecreta.charAt(i) == letra) {
					palabraGuiones[i] = letra;
					algunaLetraAcertada = true;
				}
			}
			if(!algunaLetraAcertada) {
				System.out.println("No has acertado ninguna letra");
				--intentos;
				if(intentos==0) {
					System.out.println("Has perdido porque agotaste los intentos");
					juegoTerminado = true;
				}
			}
			else {
				boolean juegoGanado = !hayGuiones(palabraGuiones);
				if(juegoGanado) {
					System.out.println("Has ganado el juego");
					juegoTerminado = true;
				}
			}
		}while(!juegoTerminado);
			}

	static String getPalabraSecreta() {
		String[] palabras = { "casa", "perro", "coche" };
		Random r = new Random();
		int n = r.nextInt(palabras.length);
		return palabras[n];
	}

	static char[] getGuionesFromPalabra(String palabra) {
		int nLetrasPalabraSecreta = palabra.length();

		char[] palabraGuiones = new char[nLetrasPalabraSecreta];

		for (int i = 0; i < palabraGuiones.length; i++) {
			palabraGuiones[i] = '_';
		}
		
		return palabraGuiones;
	}
	
	static boolean hayGuiones(char[] array) {
		for(char l:array) {
			if(l=='_')return true;
		}
		return false;
	}

}
