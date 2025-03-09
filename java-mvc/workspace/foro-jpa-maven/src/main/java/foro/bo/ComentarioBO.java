package foro.bo;

import java.util.List;

import javax.persistence.EntityManager;
import javax.persistence.TypedQuery;

import foro.EntityManagerSingleton;
import foro.entities.Comentario;
import foro.entities.Hilo;

public class ComentarioBO {


	public List<Comentario> consultarComentariosPorHilo(int hilo_id) {
		EntityManager em = EntityManagerSingleton.getEntityManager();
		TypedQuery <Comentario> query = em.createQuery("SELECT c FROM Comentario c JOIN c.hilo h WHERE h.id=:id", Comentario.class);
		query.setParameter("id", hilo_id);
		List<Comentario> comentarios = query.getResultList();
		query.setParameter("id", hilo_id);
		return comentarios;
	}
	
	public void saveComentario(Comentario c) {
		EntityManager em = EntityManagerSingleton.getEntityManager();
		em.getTransaction().begin();
		em.persist(c);
		em.getTransaction().commit();
	}
	

}
