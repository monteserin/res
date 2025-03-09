package com.pablomonteserin.hashcode;


public class HashCode_y_Equals_sobreescrito extends Exception{
    public static void main(String[] args) {
    	Persona2 p1 = new Persona2("Juan", 16);
    	Persona2 p2 = new Persona2("Juan", 16);

    	System.out.println(p1.hashCode());
    	System.out.println(p2.hashCode());	
    	
    	System.out.println(p1.equals(p2));
    	System.out.println(p1 == p2);
    	System.out.println(p1.hashCode()==p2.hashCode());
    }
}
class Persona2{
	private String nombre;
	private int edad;
	
	public Persona2(String nombre, int edad) {
		super();
		this.nombre = nombre;
		this.edad = edad;
	}
	@Override
	public int hashCode() {
		return nombre.hashCode();
	}
	@Override
	public boolean equals(Object obj) {
		if (this == obj)
			return true;
		if (obj == null)
			return false;
		if (!(obj instanceof Persona2))
			return false;
		Persona2 other = (Persona2) obj;
		if (edad != other.edad)
			return false;
		if (nombre == null) {
			if (other.nombre != null)
				return false;
		} else if (!nombre.equals(other.nombre))
			return false;
		return true;
	}


	public String getNombre() {
		return nombre;
	}
	public void setNombre(String nombre) {
		this.nombre = nombre;
	}
	public int getEdad() {
		return edad;
	}
	public void setEdad(int edad) {
		this.edad = edad;
	}
	
	
}
