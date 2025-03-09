package listeners;

import javax.persistence.PrePersist;
import javax.persistence.PreRemove;

import com.hibernate.entities.Alumno;

public class AlumnoListener {

	@PrePersist
	public void salvar(Alumno a) {
		System.out.println("nuevo alumno :" + a.getNombre() );
	}

	@PreRemove
	public void borrar(Alumno a) {
		System.out.println("borramos alumo" + a.getNombre());
	}

}
