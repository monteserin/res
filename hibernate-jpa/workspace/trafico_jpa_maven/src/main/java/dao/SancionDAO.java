package dao;

import java.util.List;

import javax.persistence.EntityManager;
import javax.persistence.TypedQuery;
import javax.persistence.criteria.CriteriaBuilder;
import javax.persistence.criteria.CriteriaQuery;
import javax.persistence.criteria.Root;

import com.hibernate.entities.Conductor;
import com.hibernate.entities.Sancion;

public class SancionDAO {

	public void insertSancion(EntityManager em, Sancion s) {
		em.persist(s);
	}

	public void updateSancion(EntityManager em, Sancion s) {
		em.persist(s);
	}

	public void updateAsignatura(EntityManager em, Sancion s) {
		em.persist(s);
	}

	public List<Sancion> listSanciones(EntityManager em) {
		CriteriaBuilder cb = em.getCriteriaBuilder();
		CriteriaQuery<Sancion> cq = cb.createQuery(Sancion.class);
		Root<Sancion> autorRoot = cq.from(Sancion.class);
		TypedQuery<Sancion> c = em.createQuery(cq);

		List<Sancion> sanciones = c.getResultList();
		return sanciones;
	}
}
