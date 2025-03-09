package com.pablomonteserin.canciones;

import java.util.TreeSet;

public class Banda extends Autor {
	private TreeSet<Musico> musicos;
	public Banda(String nombre, String genero) {
		super(nombre, genero);
		musicos = new TreeSet();
	}	
	
	public void addMusico(Musico musico){
		musicos.add(musico);
	}
}
