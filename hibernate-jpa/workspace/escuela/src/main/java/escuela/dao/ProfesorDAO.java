package escuela.dao;

import java.util.List;

import javax.persistence.EntityManager;
import javax.persistence.TypedQuery;

import escuela.entities.Profesor;

public class ProfesorDAO {
	public void insert(EntityManager em, Profesor p) {
		em.persist(p);
	}

	public void remove(EntityManager em, int id) {
		Profesor p = em.find(Profesor.class, id);
		em.remove(p);

	}

	public Profesor getById(EntityManager em, int id) {
		Profesor p = em.find(Profesor.class, id);
		return p;
	}

	public void update(EntityManager em, Profesor p) {
		em.merge(p);
	}

	public List<Profesor> get(EntityManager em) {
		TypedQuery<Profesor> query = em.createQuery("SELECT p FROM Profesor p", Profesor.class);
		return query.getResultList();
	}
}
