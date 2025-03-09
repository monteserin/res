package mensajeria.bo;

import java.util.List;

import javax.persistence.EntityManager;
import javax.persistence.TypedQuery;

import mensajeria.EntityManagerSingleton;
import mensajeria.entities.Usuario;

public class UsuarioBO {

	public Usuario consultaUsuario(String nombre, String password) {
		EntityManager em = EntityManagerSingleton.getEntityManager();
		Usuario u = null;
		try {
			TypedQuery<Usuario> query = em.createQuery(
					"SELECT u FROM Usuario u WHERE u.nombre=:nombre AND u.password=:password", Usuario.class);
			query.setParameter("nombre", nombre);
			query.setParameter("password", password);
			u = query.getSingleResult();

		} catch (Exception e) {
			u = new Usuario();
			u.setNombre(nombre);
			u.setPass(password);
			em.getTransaction().begin();
			em.persist(u);
			em.getTransaction().commit();
			return u;
		}
		return u;

	}
	
	public List<Usuario> getUsuarios() {

	        EntityManager em = EntityManagerSingleton.getEntityManager();
	      
         TypedQuery<Usuario> query = em.createQuery("SELECT u from Usuario u", Usuario.class);
         
         List<Usuario> usuarios = query.getResultList();
         return usuarios;
	}
}
