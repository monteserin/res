package escuela.dao;

import java.util.List;

import javax.persistence.EntityManager;
import javax.persistence.TypedQuery;

import escuela.entities.Alumno;

public class AlumnoDAO {
	public void insert(EntityManager em, Alumno a) {
		em.persist(a);
	}

	public void update(EntityManager em, Alumno a) {
		em.merge(a);
	}

	public Alumno getById(EntityManager em, int id) {
		Alumno a = em.find(Alumno.class, id);
		return a;
	}

	public List<Alumno> get(EntityManager em) {
		TypedQuery<Alumno> query = em.createQuery("SELECT a FROM Alumno a", Alumno.class);
		return query.getResultList();
	}

	public void remove(EntityManager em, int id) {
		Alumno a = em.find(Alumno.class, id);
		em.remove(a);

	}
}
