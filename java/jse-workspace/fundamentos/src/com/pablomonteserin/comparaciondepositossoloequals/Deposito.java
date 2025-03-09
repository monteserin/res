package com.pablomonteserin.comparaciondepositossoloequals;

import java.util.Collections;

public class Deposito {
	private String nombre;
	private double ancho;
	private double largo;
	private double alto;
	
	public Deposito(String nombre, double largo, double ancho, double alto) {
		super();
		this.nombre = nombre;
		this.ancho = ancho;
		this.largo = largo;
		this.alto = alto;
	}
	
	
	public double getAncho() {
		return ancho;
	}


	public void setAncho(double ancho) {
		this.ancho = ancho;
	}


	public double getLargo() {
		return largo;
	}


	public void setLargo(double largo) {
		this.largo = largo;
	}
	
	public String getNombre() {
		return nombre;
	}


	public void setNombre(String nombre) {
		this.nombre = nombre;
	}


	public double getAlto() {
		return alto;
	}


	public void setAlto(double alto) {
		this.alto = alto;
	}

	@Override
	public boolean equals(Object obj) {
		if(!(obj instanceof Deposito))return false;
		Deposito other = (Deposito) obj;
		if (Double.doubleToLongBits(alto*ancho*largo) != Double
				.doubleToLongBits(other.alto*other.ancho*other.largo))
			return false;
		return true;
	}

}
