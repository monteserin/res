package com.pablomonteserin.canciones;

import java.util.TreeSet;

public abstract class Autor {
	private String nombre;
	private String genero;
	private TreeSet<CD> cds;
	public Autor(String nombre, String genero){
		cds = new TreeSet();
	}
	public void addCD(CD cd){
		cds.add(cd);
	}
	public String getNombre() {
		return nombre;
	}
	public void setNombre(String nombre) {
		this.nombre = nombre;
	}
	public String getGenero() {
		return genero;
	}
	public void setGenero(String genero) {
		this.genero = genero;
	}
	public TreeSet<CD> getCds() {
		return cds;
	}
	public void setCds(TreeSet<CD> cds) {
		this.cds = cds;
	}
}
