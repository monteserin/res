package com.pablomonteserin.metodos.ejerciciossinreturn;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;

public class Velocidad {

	public static void main(String[] args) throws NumberFormatException, IOException {
        BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
		System.out.println("Introduce los km/hora: ");
		int kmhora = Integer.parseInt(br.readLine());
		
		Velocidad v = new Velocidad();
		
		v.mostrarMetrosHora(kmhora);

	}

	public void mostrarMetrosHora(int kmhora) {
		int r = kmhora*1000;
		System.out.println(r);
	}
}
