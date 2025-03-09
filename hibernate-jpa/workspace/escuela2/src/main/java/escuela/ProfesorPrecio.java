package escuela;

public class ProfesorPrecio {
	private Profesor profesor;
	private int precio;
	
	
	
	public ProfesorPrecio(Profesor profesor, int precio) {
		super();
		this.profesor = profesor;
		this.precio = precio;
	}
	
	
	public Profesor getProfesor() {
		return profesor;
	}


	public void setProfesor(Profesor profesor) {
		this.profesor = profesor;
	}


	public int getPrecio() {
		return precio;
	}


	public void setPrecio(int precio) {
		this.precio = precio;
	}



	
	
	
}
