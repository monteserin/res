package com.pablomonteserin.estructurasdecontrol.ejerciciosbuclefor;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;

public class AdivinaNumeroSecreto {

	public static void main(String[] args) throws NumberFormatException, IOException {
        BufferedReader br = new BufferedReader(new InputStreamReader(System.in));

		int nSecreto = 3;
		for(int i=1; i<=5; i++){
			System.out.println("Introduce el número secreto");
			int n = Integer.parseInt(br.readLine());
			if(n == nSecreto) {
				System.out.println("Acertaste");
				break;
			}else {
				System.out.println("Fallaste");
			}
		}
	}
}
