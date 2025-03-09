package com.pablomonteserin.canciones;

import java.util.TreeMap;

public class ListaReproduccion {
	private String titulo;
	private int cancionNumero;
	private TreeMap <Integer,Cancion>canciones;
	
	ListaReproduccion(){
		canciones = new TreeMap<Integer, Cancion>();
	}
	public Cancion getCancion(int posicionEnLaLista){
		return canciones.get(posicionEnLaLista);	
	}
	
	public void addCancion(Cancion cancion){
		cancionNumero++;
		if(cancionNumero>12){
			try {
				throw new FullListException();
			} catch (FullListException e) {
				// TODO Auto-generated catch block
				e.printStackTrace();
			}
		}else{
			canciones.put(new Integer(cancionNumero), cancion);
		}
	}
}
