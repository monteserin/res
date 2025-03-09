package com.pablomonteserin.canciones;

public class Cancion {
	private String titulo;
	private double duracion;
	

	public Cancion(String titulo, double duracion) {
		super();
		this.titulo = titulo;
		this.duracion = duracion;
	}


	public String getTitulo() {
		return titulo;
	}


	public void setTitulo(String titulo) {
		this.titulo = titulo;
	}


	public double getDuracion() {
		return this.duracion;
	}


	public void setDuracion(double duracion) {
		this.duracion = duracion;
	}
	
	
}
