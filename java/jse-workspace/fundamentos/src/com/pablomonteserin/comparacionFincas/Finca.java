package com.pablomonteserin.comparacionFincas;

import java.util.Collections;

public class Finca implements Comparable<Finca>{
	private String nombre;
	private double ancho;
	private double largo;
	
	public Finca(String nombre, double largo, double ancho) {
		super();
		this.nombre = nombre;
		this.ancho = ancho;
		this.largo = largo;
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


	@Override
	public int hashCode() {
		final int prime = 31;
		int result = 1;
		long temp;
		//¿Qué pasa si en vez de poner alto pongo ancho*alto?
		temp = Double.doubleToLongBits(largo);
		result = prime * result + (int) (temp ^ (temp >>> 32));
		temp = Double.doubleToLongBits(ancho);
		result = prime * result + (int) (temp ^ (temp >>> 32));
		return result;
	}

	
	//con esto solo puedo sacar si son iguales, no cual es mayor
	@Override
	public boolean equals(Object obj) {
		if (this == obj)
			return true;
		if (obj == null)
			return false;
		if (getClass() != obj.getClass())
			return false;
		Finca other = (Finca) obj;
		if (Double.doubleToLongBits(largo*ancho) != Double
				.doubleToLongBits(other.largo*other.ancho))
			return false;
		return true;
	}	
	
	//compareTo devuelve un 0 si son iguales, un 1 (o un entero positivo) si el primero es mayor q el segundo y un -1 (o un número negativo cualquiera) si el segundo es mayor que el primero 
	public int compareTo(Finca otherFinca){
		double productoThis = this.getAncho()*this.getLargo();
		double productoOther = otherFinca.getAncho()*otherFinca.getLargo();
		
		int valorDevuelto = 0;
		if(productoThis > productoOther)valorDevuelto=1;
		if(productoThis < productoOther)valorDevuelto=-1;
		if(productoThis == productoOther)valorDevuelto=0;
		return valorDevuelto;	
	}
}
