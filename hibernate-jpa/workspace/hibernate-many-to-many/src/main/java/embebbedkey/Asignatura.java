package embebbedkey;

import lombok.Getter;
import lombok.Setter;

import javax.persistence.*;
import java.io.Serializable;
import java.util.HashSet;
import java.util.Set;

@Entity
@Getter
@Setter
public class Asignatura implements Serializable {

	private static final long serialVersionUID = 9067468899712893201L;

	@Id
	@GeneratedValue(strategy = GenerationType.AUTO)
	private Long id;

	private String nombre;

	/**
	 * Lista de roles del usuario
	 */
	@OneToMany(mappedBy = "asignatura", fetch = FetchType.EAGER, cascade = CascadeType.ALL)
	private Set<AlumnoAsignaturaAssociation> setRoleUserAssociation = new HashSet<>();

}