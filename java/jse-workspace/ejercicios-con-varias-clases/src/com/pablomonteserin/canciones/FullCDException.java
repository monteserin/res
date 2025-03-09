package com.pablomonteserin.canciones;

public class FullCDException extends Exception {
	FullCDException(String nombreCD, String nombreCancion){
		System.out.println("el cd "+ nombreCD+"2 está lleno!. Sobra la canción: " + nombreCancion);
	}
}
