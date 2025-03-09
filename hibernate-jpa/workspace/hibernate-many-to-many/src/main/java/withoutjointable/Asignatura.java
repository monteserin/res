package withoutjointable;

import lombok.Getter;
import lombok.Setter;

import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.Id;
import javax.persistence.ManyToMany;
import java.util.List;

@Entity
@Getter
@Setter

public class Asignatura {
  @Id
  @GeneratedValue
  private  Long id;
  private String nombre;

  @ManyToMany (mappedBy = "asignaturas")
  List<Alumno> alumnos;

}
