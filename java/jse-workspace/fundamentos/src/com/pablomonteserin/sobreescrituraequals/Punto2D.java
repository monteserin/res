package com.pablomonteserin.sobreescrituraequals;

class Punto2D{
	private int x;
	private int y;
	private String nombre;
		
	public Punto2D(int x, int y, String nombre) {
		super();
		this.x = x;
		this.y = y;
		this.nombre=nombre;
	}
	@Override
	public int hashCode() {
		final int prime = 31;
		int result = 1;
		result = prime * result + x;
		result = prime * result + y;
		return result;
	}
	@Override
	public boolean equals(Object obj) {
		if (this == obj)
			return true;
		if (!(obj instanceof Punto2D))
			return false;
		Punto2D other = (Punto2D) obj;
		if (x != other.x)
			return false;
		if (y != other.y)
			return false;
		return true;
	}
}