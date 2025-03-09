package relaciones.main;

import javax.persistence.EntityManager;
import javax.persistence.EntityManagerFactory;
import javax.persistence.Persistence;

import relaciones.entities.Alumno;
import relaciones.entities.AlumnoAsignatura;
import relaciones.entities.Asignatura;

public class Main {

	public static void main(String[] args) {
		EntityManagerFactory emf = Persistence.createEntityManagerFactory("TEST_PERSISTENCE_JPA");
		EntityManager em = emf.createEntityManager();

		Alumno al = new Alumno();
		al.setNombre("Juan");
		al.setFaltasAsistencia(6);

		Asignatura as = new Asignatura();
		as.setNombre("Matematicas");

		AlumnoAsignatura aa = new AlumnoAsignatura();
		aa.setAlumno(al);
		aa.setAsignatura(as);
		aa.setHorasLectivas(34);
		try {
			em.getTransaction().begin();
			em.persist(al);
			em.persist(as);
			em.persist(aa);
			em.getTransaction().commit();

		} catch (Exception e) {
			e.printStackTrace();
		} finally {
			em.close();
		}
	}
}
