package escuela.entities;

import java.util.List;

import javax.persistence.CascadeType;
import javax.persistence.Entity;
import javax.persistence.FetchType;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.OneToMany;
import javax.persistence.PrimaryKeyJoinColumn;


@PrimaryKeyJoinColumn(name="personalId")
@Entity
public class Profesor extends Personal {
	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY) // Para generar números autoincrementados

	private int id;
	
	@OneToMany (mappedBy = "profesor", orphanRemoval = true, fetch = FetchType.EAGER) 
	private List <Asignatura> asignaturas;

	public int getId() {
		return id;
	}

	public void setId(int id) {
		this.id = id;
	}

	public List<Asignatura> getAsignaturas() {
		return asignaturas;
	}

	public void setAsignaturas(List<Asignatura> asignaturas) {
		this.asignaturas = asignaturas;
	}
	
	
}
