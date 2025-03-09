package escuela.dao;

import java.util.List;

import javax.persistence.EntityManager;
import javax.persistence.TypedQuery;

import escuela.entities.Alumno;
import escuela.entities.Asignatura;
import escuela.entities.Profesor;

public class AsignaturaDAO {
	public void insert(EntityManager em, Asignatura a) {
		em.persist(a);
	}

	public void update(EntityManager em, Asignatura p) {
		em.merge(p);
	}

	public List<Asignatura> get(EntityManager em) {
		TypedQuery<Asignatura> query = em.createQuery("FROM Asignatura", Asignatura.class);
		return query.getResultList();
	}

	public List<Asignatura> getByProfesorId(EntityManager em, int profesorId) {
		TypedQuery<Asignatura> query = em
				.createQuery("SELECT a FROM Asignatura a JOIN a.profesor p WHERE p.id=:profesorID", Asignatura.class);
		query.setParameter("profesorID", profesorId);
		return query.getResultList();
	}

	public List<Asignatura> getByAlumnoId(EntityManager em, int alumnoId) {
		TypedQuery<Asignatura> query = em
				.createQuery("SELECT a FROM Asignatura a JOIN a.profesor p WHERE p.id=:alumnoID", Asignatura.class);
		query.setParameter("alumnoID", alumnoId);
		return query.getResultList();
	}

	public void remove(EntityManager em, int id) {
		Asignatura a = em.find(Asignatura.class, id);
		em.remove(a);

	}

	public Asignatura getById(EntityManager em, int id) {
		Asignatura a = em.find(Asignatura.class, id);
		return a;
	}
}
