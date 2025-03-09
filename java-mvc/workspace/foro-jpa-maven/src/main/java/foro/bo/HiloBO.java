package foro.bo;

import java.util.List;

import javax.persistence.EntityManager;
import javax.persistence.EntityManagerFactory;
import javax.persistence.Persistence;
import javax.persistence.TypedQuery;

import foro.EntityManagerSingleton;
import foro.entities.Hilo;

public class HiloBO {
	public void crearHilo(Hilo hilo) {
		EntityManager em = EntityManagerSingleton.getEntityManager();
		em.getTransaction().begin();
		em.persist(hilo);
		em.getTransaction().commit();
	}

	public List<Hilo> consultarHilos() {
		EntityManager em = EntityManagerSingleton.getEntityManager();
		TypedQuery <Hilo> query = em.createQuery("SELECT h FROM Hilo h", Hilo.class);
		List<Hilo> hilos = query.getResultList();
		return hilos;
	}
	
	public Hilo consultarHilo(int id) {
		EntityManager em = EntityManagerSingleton.getEntityManager();
		TypedQuery <Hilo> query = em.createQuery("SELECT h FROM Hilo h WHERE h.id=:id", Hilo.class);
		query.setParameter("id", id);
		Hilo hilo = query.getSingleResult();
		return hilo;
	}
}
