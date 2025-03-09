package com.pablomonteserin.estructurasdecontrol.ejerciciosbuclewhile;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;

public class IntroduceTuNombre {
	public static void main(String[] args) throws IOException {
        BufferedReader br = new BufferedReader(new InputStreamReader(System.in));

		boolean todoOk = false;

		while (todoOk == false) {

			System.out.println("Introduce tu nombre: ");
			String nombre = br.readLine();
			
			if (!nombre.equals("")) {
				System.out.println("Los datos son correctos?");
				String respuesta = br.readLine();
				if (respuesta.equals("si")) {
					System.out.println("Puedes seguir con el examen");
					todoOk =true;
				} 
			} else {
				System.out.println("error");
			}
		}
	}
}
