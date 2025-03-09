package com.pablomonteserin.excepciones;

public class PrecioDemasiadoAltoException extends Exception {

	public PrecioDemasiadoAltoException() {
		// TODO Auto-generated constructor stub
	}
	@Override
	public void printStackTrace() {
		// TODO Auto-generated method stub
		super.printStackTrace();
		System.out.println("El precio es demasiado alto");
	}

}
