package relaciones.entities;

import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.Id;
import javax.persistence.JoinColumn;
import javax.persistence.ManyToOne;
import javax.persistence.Table;

@Entity
public class AlumnoAsignatura {
	@Id
	@GeneratedValue
	private int id;

	@ManyToOne
	@JoinColumn(name = "alumnoId")
	private Alumno alumno;

	@ManyToOne
	@JoinColumn(name = "asignaturaId")
	private Asignatura asignatura;
	
	private int horasLectivas;
	

	public int getHorasLectivas() {
		return horasLectivas;
	}

	public void setHorasLectivas(int horasLectivas) {
		this.horasLectivas = horasLectivas;
	}

	public Alumno getAlumno() {
		return alumno;
	}

	public void setAlumno(Alumno alumno) {
		this.alumno = alumno;
	}

	public Asignatura getAsignatura() {
		return asignatura;
	}

	public void setAsignatura(Asignatura asignatura) {
		this.asignatura = asignatura;
	}

	public int getId() {
		return id;
	}

	public void setId(int id) {
		this.id = id;
	}

}
