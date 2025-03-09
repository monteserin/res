package mensajeria.bo;

import java.util.List;

import javax.persistence.EntityManager;
import javax.persistence.EntityManagerFactory;
import javax.persistence.Persistence;
import javax.persistence.TypedQuery;

import mensajeria.entities.Mensaje;
import mensajeria.entities.Usuario;

public class MensajeBO {
	
	public List<Mensaje> recuperarMensajes(int idUsuarioLogueado) {

		 EntityManagerFactory emf = Persistence.createEntityManagerFactory("TEST_PERSISTENCE_JPA");
	        EntityManager em = emf.createEntityManager();
	      
         TypedQuery<Mensaje> query = em.createQuery("SELECT m FROM Mensaje m WHERE m.destinatario.id=:condicion", Mensaje.class);
         query.setParameter("condicion", idUsuarioLogueado);
         List<Mensaje> mensajes = query.getResultList();
         return mensajes;
	}
	
	public void addMensajes(int usuarioLogueadoId, String []mensajes , String mensaje) {

		 EntityManagerFactory emf = Persistence.createEntityManagerFactory("TEST_PERSISTENCE_JPA");
	        EntityManager em = emf.createEntityManager();
            em.getTransaction().begin();

	        for(int i=0; i<mensajes.length; i++) {
	        	Mensaje m = new Mensaje();
	        	m.setMensaje(mensaje);
	        	Usuario r = new Usuario();
	        	Usuario u = new Usuario();
	        	u.setId(usuarioLogueadoId);
	        	r.setId(Integer.parseInt(mensajes[i]));
	        	m.setDestinatario(r);
	        	m.setRemitente(u);
	        	em.persist(m);
	            em.getTransaction().commit();
	        }
        
	}
}
