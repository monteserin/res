package escuela.entities;

import java.util.List;

import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.ManyToMany;
import javax.persistence.PrimaryKeyJoinColumn;

@PrimaryKeyJoinColumn(name = "personalId")
@Entity
public class Alumno extends Personal {
	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY) // Para generar números autoincrementados

	private int id;

	int faltasAsistencia;

	@ManyToMany
	List<Asignatura> asignaturas;

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

	public List<Asignatura> getAsignaturas() {
		return asignaturas;
	}

	public void setAsignaturas(List<Asignatura> asignaturas) {
		this.asignaturas = asignaturas;
	}

}
