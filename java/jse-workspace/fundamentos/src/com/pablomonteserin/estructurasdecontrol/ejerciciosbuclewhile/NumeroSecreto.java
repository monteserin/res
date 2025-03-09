package com.pablomonteserin.estructurasdecontrol.ejerciciosbuclewhile;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;

public class NumeroSecreto {

	public static void main(String[] args) throws IOException {
		int n_secreto = 3;
		boolean quieroJugar = true;
        BufferedReader br = new BufferedReader(new InputStreamReader(System.in));


		do {
			for (int i = 0; i < 3; i++) {
				System.out.println("Introduce un nÃºmero");
				int n_introducido = Integer.parseInt(br.readLine());

				if (n_introducido == n_secreto) {
					System.out.println("Acertaste");
					break;
				} else {
					System.out.println("Fallaste");
				}

			}
			System.out.println("Fin del juego");
			System.out.println("¿Quieres seguir jugando?");
			String respuesta = br.readLine();
			if(respuesta.equals("no")) {
				quieroJugar=false;	
			}
		} while(quieroJugar);
		System.out.println("Fin de todos los juegos");
	}
}
