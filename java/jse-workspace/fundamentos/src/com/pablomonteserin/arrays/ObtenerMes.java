package com.pablomonteserin.arrays;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;

public class ObtenerMes {

	public static void main(String[] args) throws NumberFormatException, IOException {
		BufferedReader br = new BufferedReader(new InputStreamReader(System.in));

		System.out.println("Introduzca un numero de mes");
		int mes;
			mes = Integer.parseInt(br.readLine());

			String[] meses = { "enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiombre",
					"octubre", "nomviembre", "diciembre" };

			if (mes >= 1 && mes <= 12) {
				System.out.println(meses[mes - 1]);
			} else {
				System.out.println("El numero introducido no es correcto");
			}
		;
	}

}
