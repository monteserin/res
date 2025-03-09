package bo;

import java.util.List;

import javax.persistence.EntityManager;

import com.hibernate.config.EntityManagerSingleton;
import com.hibernate.entities.Agente;
import com.hibernate.entities.Conductor;

import dao.AgenteDAO;
import dao.ConductorDAO;

public class AgenteBO {
	public void insertAgente(Agente a) {
		EntityManager em = EntityManagerSingleton.getEntityManager();
		em.getTransaction().begin();
		AgenteDAO agenteDAO = new AgenteDAO();
		agenteDAO.insertAgente(em, a);
		em.getTransaction().commit();
		em.close();
	}

	public void updateProfesor(Conductor c) {
		EntityManager em = EntityManagerSingleton.getEntityManager();
		em.getTransaction().begin();
		ConductorDAO profesorDAO = new ConductorDAO();
		profesorDAO.insertConductor(em, c);
		em.getTransaction().commit();
		em.close();
	}

	public List<Agente> listAgentes() {
		EntityManager em = EntityManagerSingleton.getEntityManager();
		em.getTransaction().begin();
		AgenteDAO agenteDAO = new AgenteDAO();
		List<Agente> agentes = agenteDAO.listAgentes(em);
		em.getTransaction().commit();
		em.close();
		return agentes;
	}

}
