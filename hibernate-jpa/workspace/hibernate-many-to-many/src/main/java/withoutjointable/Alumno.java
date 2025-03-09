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
public class Alumno {
  @Id
  @GeneratedValue
  private Long id;
  private String nombre;
  @ManyToMany
  List<Asignatura> asignaturas;
}
