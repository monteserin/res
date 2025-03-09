package relaciones.entities;

import java.util.List;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.OneToMany;

@Entity
public class Asignatura {
	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY) // Para generar números autoincrementados
	@Column(name = "asignaturaId")
	private int id;
	private String nombre;
	
	@OneToMany(mappedBy = "asignatura")
	List<AlumnoAsignatura> alumnoAsignatura;
	
	public int getId() {
		return id;
	}
	public void setId(int id) {
		this.id = id;
	}
	public String getNombre() {
		return nombre;
	}
	public void setNombre(String nombre) {
		this.nombre = nombre;
	}
	public List<AlumnoAsignatura> getAlumnoAsignatura() {
		return alumnoAsignatura;
	}
	public void setAlumnoAsignatura(List<AlumnoAsignatura> alumnoAsignatura) {
		this.alumnoAsignatura = alumnoAsignatura;
	}

	
}
