package com.hibernate.main;

import javax.persistence.EntityManager;

import com.hibernate.config.EntityManagerSingleton;
import com.hibernate.entities.Alumno;

public class Main {
	public static void main(String[] args) {
		EntityManager em = EntityManagerSingleton.getEntityManager();
		Alumno a = new Alumno();
		em.getTransaction().begin();
		a.setNombre("Paco");
		em.persist(a);
		em.getTransaction().commit();
		em.close();
	}
}
