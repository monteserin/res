package bo;

import java.util.List;

import javax.persistence.EntityManager;

import com.hibernate.config.EntityManagerSingleton;
import com.hibernate.entities.Agente;
import com.hibernate.entities.Sancion;

import dao.AgenteDAO;
import dao.SancionDAO;

public class SancionesBO {
	public void insertSancion(Sancion s) {
		EntityManager em = EntityManagerSingleton.getEntityManager();
		em.getTransaction().begin();
		SancionDAO sancionDAO = new SancionDAO();
		sancionDAO.insertSancion(em, s);
		em.getTransaction().commit();
		em.close();
	}

	public void updateSancion(Sancion s) {
		EntityManager em = EntityManagerSingleton.getEntityManager();
		em.getTransaction().begin();
		SancionDAO sancionDAO = new SancionDAO();
		sancionDAO.updateSancion(em, s);
		em.getTransaction().commit();
		em.close();
	}

	public List<Sancion> listSanciones() {
		EntityManager em = EntityManagerSingleton.getEntityManager();
		em.getTransaction().begin();
		SancionDAO sancionDAO = new SancionDAO();
		List<Sancion> sanciones = sancionDAO.listSanciones(em);
		em.getTransaction().commit();
		em.close();
		return sanciones;
	}

	public List<Sancion> listSancionesByAgente(int idAgente) {
		EntityManager em = EntityManagerSingleton.getEntityManager();
		em.getTransaction().begin();
		AgenteDAO agenteDAO = new AgenteDAO();
		Agente a = em.find(Agente.class, idAgente);
		List<Sancion> agentes = agenteDAO.listSancionesByAgente(em, a);
		em.getTransaction().commit();
		em.close();
		return agentes;
	}
}
