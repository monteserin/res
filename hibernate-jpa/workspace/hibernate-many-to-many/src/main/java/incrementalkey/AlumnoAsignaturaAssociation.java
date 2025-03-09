package incrementalkey;

import lombok.Getter;
import lombok.Setter;

import javax.persistence.*;
import java.io.Serializable;

@Getter
@Setter
@Entity
public class AlumnoAsignaturaAssociation implements Serializable {
	private static final long serialVersionUID = 7350135545320698807L;

	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	private int id;

	@ManyToOne
	private Asignatura asignatura;

	@ManyToOne
	private Alumno alumno;

	private int nota;
}
