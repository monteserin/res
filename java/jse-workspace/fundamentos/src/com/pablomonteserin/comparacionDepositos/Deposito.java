package com.pablomonteserin.comparacionDepositos;

import java.util.Collections;


public class Deposito implements Comparable<Deposito>{
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
	public int hashCode() {
		final int prime = 31;
		int result = 1;
		long temp;
		temp = Double.doubleToLongBits(alto);
		result = prime * result + (int) (temp ^ (temp >>> 32));
		temp = Double.doubleToLongBits(ancho);
		result = prime * result + (int) (temp ^ (temp >>> 32));
		temp = Double.doubleToLongBits(largo);
		result = prime * result + (int) (temp ^ (temp >>> 32));
		return result;
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


	//compareTo devuelve un 0 si son iguales, un 1 (o un entero positivo) si el primero es mayor q el segundo y un -1 (o un número negativo cualquiera) si el segundo es mayor que el primero 
	public int compareTo(Deposito otherFinca){
		double productoThis = this.getAncho()*this.getLargo()*this.getAlto();
		double productoOther = otherFinca.getAncho()*otherFinca.getLargo()*otherFinca.getAlto();
		
		int valorDevuelto = 0;
		if(productoThis > productoOther)valorDevuelto=1;
		if(productoThis < productoOther)valorDevuelto=-1;
		if(productoThis == productoOther)valorDevuelto=0;
		return valorDevuelto;	
	}
}
