package com.pablomonteserin.excepciones;

public class Servicios {

	public static int getPrecioConIva(int precio) throws PrecioDemasiadoAltoException{
		if(precio>100)throw new PrecioDemasiadoAltoException();
		return precio;
	}
}
