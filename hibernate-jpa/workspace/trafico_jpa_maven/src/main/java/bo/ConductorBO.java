package bo;

import java.util.List;

import javax.persistence.EntityManager;

import com.hibernate.config.EntityManagerSingleton;
import com.hibernate.entities.Conductor;
import com.hibernate.entities.Sancion;

import dao.ConductorDAO;
import dao.SancionDAO;

public class ConductorBO {

	public void insertConductor(Conductor c) {
		EntityManager em = EntityManagerSingleton.getEntityManager();
		em.getTransaction().begin();
		ConductorDAO conductorDAO = new ConductorDAO();
		conductorDAO.insertConductor(em, c);	
		em.getTransaction().commit();
		em.close();
	}

	public void updateConductor(Conductor c) {
		EntityManager em = EntityManagerSingleton.getEntityManager();
		em.getTransaction().begin();
		ConductorDAO conductorDAO = new ConductorDAO();
		conductorDAO.updateConductor(em, c);
		em.getTransaction().commit();
		em.close();
	}

	public List<Conductor> listConductores() {
		EntityManager em = EntityManagerSingleton.getEntityManager();
		em.getTransaction().begin();
		ConductorDAO alumnoDAO = new ConductorDAO();
		List<Conductor> alumnos = alumnoDAO.listConductores(em);
		em.getTransaction().commit();
		em.close();
		return alumnos;
	}
}
