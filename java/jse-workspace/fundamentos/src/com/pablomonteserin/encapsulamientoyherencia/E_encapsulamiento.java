package com.pablomonteserin.encapsulamientoyherencia;

public class E_encapsulamiento {
	public static void main(String[] args){
		Almacen almacen = new Almacen();
		almacen.setNumCajasAlmacen(12);
		System.out.println(almacen.getNumCajasAlmacen());
	}	
}

class Almacen{	
	private int numCajasAlmacen;

	public int getNumCajasAlmacen() {
		return numCajasAlmacen;
	}
	public void setNumCajasAlmacen(int numCajasAlmacen) {
		if(numCajasAlmacen>10){
			System.out.println("No se admiten entregas de más de 10 unidades");
		}else{
			this.numCajasAlmacen = numCajasAlmacen;
		}
	}
}

