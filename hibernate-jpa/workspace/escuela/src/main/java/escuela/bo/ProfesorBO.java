package escuela.bo;

import java.util.List;

import javax.persistence.EntityManager;

import escuela.connection.EntityManagerSingleton;
import escuela.dao.AsignaturaDAO;
import escuela.dao.ProfesorDAO;
import escuela.entities.Asignatura;
import escuela.entities.Profesor;

public class ProfesorBO {
	public void insertProfesor(Profesor p) {
		EntityManager em = EntityManagerSingleton.getEntityManager();
		em.getTransaction().begin();
		ProfesorDAO profesorDAO = new ProfesorDAO();
		profesorDAO.insert(em, p);
		em.getTransaction().commit();
		em.close();
	}
	
	public List<Profesor> listProfesores() {
		EntityManager em = EntityManagerSingleton.getEntityManager();
		ProfesorDAO profesorDAO = new ProfesorDAO();
		List<Profesor> profesores = profesorDAO.get(em);
		em.close();
		return profesores;
	}

	public void vincularProfesorAAsignatura(int idProfesor, int idAsignatura) {
		EntityManager em = EntityManagerSingleton.getEntityManager();
		Profesor profesor = em.find(Profesor.class, idProfesor);
		Asignatura asignatura = em.find(Asignatura.class, idAsignatura);
		profesor.getAsignaturas().add(asignatura);
		asignatura.setProfesor(profesor);
		ProfesorDAO profesorDAO = new ProfesorDAO();
		AsignaturaDAO asignaturaDAO = new AsignaturaDAO();

		em.getTransaction().begin();
		profesorDAO.update(em, profesor);
		asignaturaDAO.update(em, asignatura);
		
		em.getTransaction().commit();
		em.close();
	}
	
	public void removeProfesor(int id) {
		EntityManager em = EntityManagerSingleton.getEntityManager();
		ProfesorDAO profesorDAO = new ProfesorDAO();
		em.getTransaction().begin();
		profesorDAO.remove(em, id);
		em.getTransaction().commit();
		em.close();
	}
	
	public void updateProfesor(int idProfesor, String nombre) {
		EntityManager em = EntityManagerSingleton.getEntityManager();
		ProfesorDAO profesorDAO = new ProfesorDAO();
		
		Profesor p = profesorDAO.getById(em,idProfesor);
		p.setNombre(nombre);
		
		
		em.getTransaction().begin();
		profesorDAO.update(em, p);
		em.getTransaction().commit();
		em.close();
	}
}
