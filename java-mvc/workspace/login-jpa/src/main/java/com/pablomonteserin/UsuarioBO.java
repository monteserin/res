package com.pablomonteserin;

import javax.persistence.EntityManager;
import javax.persistence.EntityManagerFactory;
import javax.persistence.Persistence;
import javax.persistence.Query;
import javax.persistence.TypedQuery;

public class UsuarioBO {

	public Usuario getUsuario(String nombre, String password) {

	       EntityManagerFactory emf = Persistence.createEntityManagerFactory("TEST_PERSISTENCE_JPA");
	        EntityManager em = emf.createEntityManager();
	      
            TypedQuery<Usuario> query = em.createQuery("SELECT u from Usuario u WHERE u.nombre=:name AND u.pass=:password", Usuario.class);
            query.setParameter("name", nombre);
            query.setParameter("password", password);
            
            Usuario u = query.getSingleResult();
            return u;
	}
}
