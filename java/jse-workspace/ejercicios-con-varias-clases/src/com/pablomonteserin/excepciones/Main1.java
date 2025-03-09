package com.pablomonteserin.excepciones;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;

public class Main1 {

	/**
	 * @param args
	 */
	public static void main(String[] args) {
		BufferedReader lector = new BufferedReader(new InputStreamReader(System.in));
		try {
			System.out.println("Introduzca el precio, por favor: ");
			String txt = lector.readLine();
			int precio = Integer.parseInt(txt);
			System.out.println(Servicios.getPrecioConIva(precio));
				
			
		} catch (IOException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		} catch (PrecioDemasiadoAltoException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
	}

}
