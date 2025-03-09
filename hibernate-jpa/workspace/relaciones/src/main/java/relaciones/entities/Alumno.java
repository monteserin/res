package relaciones.entities;

import java.util.List;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.ManyToMany;
import javax.persistence.OneToMany;
import javax.persistence.PrimaryKeyJoinColumn;

@Entity
public class Alumno {
	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY) // Para generar números autoincrementados
	@Column(name = "alumnoId")
	private int id;

	private String nombre;
	
	int faltasAsistencia;

	@OneToMany(mappedBy = "alumno")
	List<AlumnoAsignatura> alumnoAsignatura;

	public int getId() {
		return id;
	}

	public void setId(int id) {
		this.id = id;
	}

	public int getFaltasAsistencia() {
		return faltasAsistencia;
	}

	public void setFaltasAsistencia(int faltasAsistencia) {
		this.faltasAsistencia = faltasAsistencia;
	}



	public List<AlumnoAsignatura> getAlumnoAsignatura() {
		return alumnoAsignatura;
	}

	public void setAlumnoAsignatura(List<AlumnoAsignatura> alumnoAsignatura) {
		this.alumnoAsignatura = alumnoAsignatura;
	}

	public String getNombre() {
		return nombre;
	}

	public void setNombre(String nombre) {
		this.nombre = nombre;
	}

}
