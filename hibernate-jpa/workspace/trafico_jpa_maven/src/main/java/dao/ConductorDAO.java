package dao;

import java.util.List;

import javax.persistence.EntityManager;
import javax.persistence.TypedQuery;
import javax.persistence.criteria.CriteriaBuilder;
import javax.persistence.criteria.CriteriaQuery;
import javax.persistence.criteria.Root;

import com.hibernate.entities.Agente;
import com.hibernate.entities.Conductor;

public class ConductorDAO {
	public void insertConductor(EntityManager em, Conductor c) {
		em.persist(c);
	}

	public void updateConductor(EntityManager em, Conductor c) {
		em.persist(c);
	}

	public List<Conductor> listConductores(EntityManager em) {
		CriteriaBuilder cb = em.getCriteriaBuilder();
		CriteriaQuery<Conductor> cq = cb.createQuery(Conductor.class);
		Root<Conductor> autorRoot = cq.from(Conductor.class);
		TypedQuery<Conductor> q = em.createQuery(cq);

		List<Conductor> conductores = q.getResultList();
		return conductores;
	}
}
