package com.pablomonteserin.canciones;

import java.util.ArrayList;
import java.util.Date;
import java.util.Iterator;

public class CD {
	private String titulo;
	private Date fechaPublicacion;
	private ArrayList canciones;
	

	
	public CD(String titulo, Date fechaPublicacion) {
		super();
		this.titulo = titulo;
		this.fechaPublicacion = fechaPublicacion;
		canciones = new ArrayList();

	}

	public double getDuracion(){
		Iterator<Cancion> e = canciones.iterator();
		double duracionTotal=0;
		while(e.hasNext()){
			duracionTotal +=((Cancion)e.next()).getDuracion();
		}
		return duracionTotal;
	}
	
	public void addCancion(Cancion cancionNueva){
		if(this.getDuracion()+cancionNueva.getDuracion() > 80){
			try {
				throw new FullCDException(this.getTitulo(), cancionNueva.getTitulo());
			} catch (FullCDException e) {
				// TODO Auto-generated catch block
				e.printStackTrace();
			}
		}else{
			canciones.add(cancionNueva);
		}
	}
	
	public String getTitulo() {
		return titulo;
	}

	public void setTitulo(String titulo) {
		this.titulo = titulo;
	}

	public int compareTo(Object o){
		CD other = (CD)o;
		return this.getTitulo().compareTo(other.getTitulo());
	}

	@Override
	public int hashCode() {
		final int prime = 31;
		int result = 1;
		result = prime * result + ((titulo == null) ? 0 : titulo.hashCode());
		return result;
	}

	@Override
	public boolean equals(Object obj) {
		if (this == obj)
			return true;
		if (obj == null)
			return false;
		if (getClass() != obj.getClass())
			return false;
		CD other = (CD) obj;
		if (titulo == null) {
			if (other.titulo != null)
				return false;
		} else if (!titulo.equals(other.titulo))
			return false;
		return true;
	}
	
	
}
