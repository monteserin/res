package com.pablomonteserin.compararPersonas;

public class SinDatosException extends Exception {

	public SinDatosException() {
		// TODO Auto-generated constructor stub
	}

	public SinDatosException(String message) {
		super(message);
		// TODO Auto-generated constructor stub
	}

	public SinDatosException(Throwable cause) {
		super(cause);
		// TODO Auto-generated constructor stub
	}

	public SinDatosException(String message, Throwable cause) {
		super(message, cause);
		// TODO Auto-generated constructor stub
	}
	@Override
	public void printStackTrace() {
		// TODO Auto-generated method stub
		super.printStackTrace();
		System.out.println("Sin datos exception");
	}

}
