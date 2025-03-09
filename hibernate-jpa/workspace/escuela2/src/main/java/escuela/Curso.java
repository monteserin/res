package escuela;

import java.util.Date;

import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.ManyToOne;

@Entity
public class Curso {

	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	private int Id;
private String nombre;

	private Date fechaInicio;
	private int precio;

	@ManyToOne
	private Profesor profesor;

	public Curso() {
		super();
		// TODO Auto-generated constructor stub
	}

	
	public Curso(String nombre, Date fechaInicio, int precio, Profesor profesor) {
		super();
		this.nombre = nombre;
		this.fechaInicio = fechaInicio;
		this.precio = precio;
		this.profesor = profesor;
	}


	public int getId() {
		return Id;
	}

	public void setId(int id) {
		Id = id;
	}

	public String getNombre() {
		return nombre;
	}

	public void setNombre(String nombre) {
		this.nombre = nombre;
	}

	public Date getFechaInicio() {
		return fechaInicio;
	}

	public void setFechaInicio(Date fechaInicio) {
		this.fechaInicio = fechaInicio;
	}

	public int getPrecio() {
		return precio;
	}

	public void setPrecio(int precio) {
		this.precio = precio;
	}

	public Profesor getProfesor() {
		return profesor;
	}

	public void setProfesor(Profesor profesor) {
		this.profesor = profesor;
	}

	

}
