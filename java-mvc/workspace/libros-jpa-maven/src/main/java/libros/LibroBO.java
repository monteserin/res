package libros;

import java.util.List;

import javax.persistence.EntityManager;
import javax.persistence.TypedQuery;

public class LibroBO {

	public List<Libro> consultarLibros(){
		EntityManager em = EntityManagerSingleton.getEntityManager();
		TypedQuery <Libro> q =em.createQuery("SELECT l FROM Libro l", Libro.class);
		List<Libro> equipos = q.getResultList();
		em.close();
		return equipos;	
	}
	
	public void alta(Libro libro){
		EntityManager em = EntityManagerSingleton.getEntityManager();
		em.getTransaction().begin();
		em.persist(libro);
		em.getTransaction().commit();
		em.close();
	}
	public void modificar(Libro libro){
		EntityManager em = EntityManagerSingleton.getEntityManager();
		em.getTransaction().begin();
		em.merge(libro);
		em.getTransaction().commit();
		em.close();
	}
	
	public void baja(Libro libro){
		EntityManager em = EntityManagerSingleton.getEntityManager();
		em.getTransaction().begin();
		em.remove(em.contains(libro) ? libro : em.merge(libro));
		em.getTransaction().commit();
		em.close();
	}

}
