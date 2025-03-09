package com.pablomonteserin.metodos.ejerciciosconreturn;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;

public class Velocidad {

	public static void main(String[] args) throws NumberFormatException, IOException {
        BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
		System.out.println("Introduce los km/hora: ");
		int kmhora =Integer.parseInt(br.readLine());
		
		Velocidad v = new Velocidad();
		
		int var = v.mostrarMetrosHora(kmhora);
		System.out.println(var);
	}

	public int mostrarMetrosHora(int kmhora) {
		int r = kmhora*1000;
		return r;
	}
}
