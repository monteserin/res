package withoutjointable2;

import lombok.Getter;
import lombok.Setter;

import javax.persistence.*;
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
  @JoinTable(
    name = "alumno_asignatura",
    joinColumns = @JoinColumn(name = "alumno_id"),
    inverseJoinColumns = @JoinColumn(name = "asignatura_id")
  )
  List<Asignatura> asignaturas;
}
