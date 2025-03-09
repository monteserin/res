package embebbedkey;

import lombok.Getter;
import lombok.Setter;

import javax.persistence.*;
import java.io.Serializable;
import java.util.HashSet;
import java.util.Set;

@Entity  @Getter @Setter
public class Alumno implements Serializable {
	private static final long serialVersionUID = 198355926937292762L;

	@Id
	@GeneratedValue(strategy = GenerationType.AUTO)
	private Long id;

	/**
	 * Nombre del rol
	 */
	private String nombre;

	@OneToMany(mappedBy = "alumno", fetch = FetchType.EAGER)
	private Set<AlumnoAsignaturaAssociation> lstRoleUserAssociation = new HashSet<>();


	
}
