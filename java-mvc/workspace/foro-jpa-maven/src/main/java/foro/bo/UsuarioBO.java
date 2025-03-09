package foro.bo;

import java.util.List;

import javax.persistence.EntityManager;
import javax.persistence.EntityManagerFactory;
import javax.persistence.Persistence;
import javax.persistence.TypedQuery;

import foro.EntityManagerSingleton;
import foro.entities.Usuario;

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
			u.setPassword(password);
			em.getTransaction().begin();
			em.persist(u);
			em.getTransaction().commit();
			return u;
		}
		return u;

	}
}
