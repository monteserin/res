package servicio;

import java.util.List;

import javax.persistence.EntityManager;
import javax.persistence.EntityManagerFactory;
import javax.persistence.Persistence;
import javax.persistence.Query;

import invitado.Invitado;

public class Servicio {

	public void alta(Invitado invitado) {
		EntityManagerFactory emf = Persistence.createEntityManagerFactory("TEST_PERSISTENCE_JPA");
		EntityManager em = emf.createEntityManager();
		em.getTransaction().begin();
		em.persist(invitado);
		em.getTransaction().commit();
		em.close();

	}

	public void baja(Invitado invitado) {
		EntityManagerFactory emf = Persistence.createEntityManagerFactory("TEST_PERSISTENCE_JPA");
		EntityManager em = emf.createEntityManager();
		em.getTransaction().begin();
		em.remove(invitado);
		em.getTransaction().commit();
		em.close();
	}

	public static List<Invitado> consulta() {
		EntityManagerFactory emf = Persistence.createEntityManagerFactory("TEST_PERSISTENCE_JPA");
		EntityManager em = emf.createEntityManager();
		Query query = em.createQuery("SELECT i from Invitado");
		List<Invitado> invitados = query.getResultList();
		em.close();
		return invitados;
		
	}
}
