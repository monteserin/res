package com.pablomonteserin.comparacionesycolecciones;

import java.util.ArrayList;
import java.util.Iterator;

public class B_coleccionesII {
	public static void main(String []args){
		Cosa cosa = new Cosa();
		cosa.setValor("cosa");	
		ArrayList<Cosa> cosas = new ArrayList<Cosa>();
		cosas.add(cosa);	
		Iterator<Cosa> it = cosas.iterator();
		while(it.hasNext()){
			cosa = it.next();
			cosa.setValor("hola");
		}	
		System.out.println(cosas.get(0).getValor());
	}
}
class Cosa{
	String valor;
	public String getValor() {
		return valor;
	}
	public void setValor(String valor) {
		this.valor = valor;
	}
}