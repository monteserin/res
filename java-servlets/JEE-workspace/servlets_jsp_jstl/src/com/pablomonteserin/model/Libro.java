package com.pablomonteserin.model;


public class Libro {
	private String isbn;
	private String titulo;
	private double precio;
	
	public Libro(){}
	public Libro(String isbn, String titulo, double precio) {
		super();
		this.isbn = isbn;
		this.titulo = titulo;
		this.precio = precio;
	}
	
	public String getIsbn() {
		return isbn;
	}
	public void setIsbn(String isbn) {
		this.isbn = isbn;
	}
	public String getTitulo() {
		return titulo;
	}
	public void setTitulo(String titulo) {
		this.titulo = titulo;
	}
	public double getPrecio() {
		return precio;
	}
	public void setPrecio(double precio) {
		this.precio = precio;
	}


}


