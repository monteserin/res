package invitado;

import java.util.List;

import javax.persistence.EntityManager;
import javax.persistence.TypedQuery;

public class InvitadoBO {

	public void alta(Invitado invitado) {
		EntityManager em = EntityManagerSingleton.getEntityManager();
		em.getTransaction().begin();
		em.persist(invitado);
		em.getTransaction().commit();
		em.close();
	}
	
	public List<Invitado> getInvitados() {
		EntityManager em = EntityManagerSingleton.getEntityManager();
		TypedQuery<Invitado> q =em.createQuery("SELECT i FROM Invitado i", Invitado.class);
		List<Invitado> invitados = q.getResultList();
		em.close();
		return invitados;
	}
	
	public void baja(Integer id) {
		EntityManager em = EntityManagerSingleton.getEntityManager();
		em.getTransaction().begin();
		Invitado invitado = em.find(Invitado.class, id);
		em.remove(invitado);
		em.getTransaction().commit();
		em.close();
	}
}
