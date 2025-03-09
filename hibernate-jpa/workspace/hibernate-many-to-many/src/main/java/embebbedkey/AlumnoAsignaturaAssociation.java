package embebbedkey;

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
    @EmbeddedId
    private AlumnoAsignaturaAssociationId id;

    @ManyToOne
    @JoinColumn(name = "asignatura_id", updatable = false, insertable = false, referencedColumnName = "id")
    private Asignatura asignatura;

    @ManyToOne
    @JoinColumn(name = "alumno_id", updatable = false, insertable = false, referencedColumnName = "id")
    private Alumno alumno;

    private int nota;
}
