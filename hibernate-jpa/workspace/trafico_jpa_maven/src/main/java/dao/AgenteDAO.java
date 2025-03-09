package dao;

import java.util.List;

import javax.persistence.EntityManager;
import javax.persistence.TypedQuery;
import javax.persistence.criteria.CriteriaBuilder;
import javax.persistence.criteria.CriteriaQuery;
import javax.persistence.criteria.Root;

import com.hibernate.entities.Agente;
import com.hibernate.entities.Sancion;

public class AgenteDAO {

	public void insertAgente(EntityManager em, Agente a) {
		em.persist(a);
	}
	
	public List<Agente> listAgentes(EntityManager em) {
		CriteriaBuilder cb = em.getCriteriaBuilder();
		CriteriaQuery<Agente> cq = cb.createQuery(Agente.class);
		Root<Agente> autorRoot = cq.from(Agente.class);
		TypedQuery<Agente> q = em.createQuery(cq);

		List<Agente> agentes = q.getResultList();
		return agentes;
	}
	
	public List<Sancion> listSancionesByAgente(EntityManager em, Agente a) {
		CriteriaBuilder cb = em.getCriteriaBuilder();
		CriteriaQuery<Sancion> cq = cb.createQuery(Sancion.class);
		Root<Sancion> autorRoot = cq.from(Sancion.class);
		TypedQuery<Sancion> q = em.createQuery(cq);

		List<Sancion> sanciones = q.getResultList();
		return sanciones;
	}
	

	public void updateAgente(EntityManager em, Sancion a) {
		em.persist(a);
		em.close();
	}
}
