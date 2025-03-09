package com.pablomonteserin.excepciones;
public class ArrojarExcepcion {
	public static void main(String[] args) {
		ArrojarExcepcion arrojarExcepcion = new ArrojarExcepcion();
		try {
			arrojarExcepcion.lanzarExcepcion();
		} catch (Exception e) {
			System.out.println("excepción lanzada y procesada");
		}
		arrojarExcepcion.procesarExceptionInSitu();
	}
	public void lanzarExcepcion() throws Exception{
		throw new Exception();
	}
	public void procesarExceptionInSitu(){
		try {
			throw new Exception();
		} catch (Exception e) {
			System.out.println("excepción procesada");
		}
	}
}
