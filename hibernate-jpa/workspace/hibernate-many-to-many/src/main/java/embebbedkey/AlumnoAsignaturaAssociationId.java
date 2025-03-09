package embebbedkey;

import java.io.Serializable;

import lombok.Getter;
import lombok.Setter;

import javax.persistence.Entity;

@Getter
@Setter
public class AlumnoAsignaturaAssociationId implements Serializable {

    private static final long serialVersionUID = -426631449303803949L;

    private Long asignatura_id;
    private Long alumno_id;
}
