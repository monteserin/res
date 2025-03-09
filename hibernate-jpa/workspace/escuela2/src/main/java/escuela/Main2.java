package escuela;

import java.util.Iterator;
import java.util.List;

import javax.persistence.TypedQuery;

import org.hibernate.Session;

public class Main2 {

	public static void main(String[] args) {
		Session session = HibernateUtil.getSessionFactory().openSession();

		System.out.println("Listar los nombres de todos los profesores.");
		TypedQuery<String> hqlQuery1 = session.createQuery("SELECT p.nombre FROM  Profesor p");
		List<String> profesores = hqlQuery1.getResultList(); 
		
		Iterator<String> it = profesores.iterator();
		while(it.hasNext()) {
			String nombre = it.next();
			System.out.println(nombre);
		}
		
		
		
		System.out.println("Listar el nombre y el apellido de todos los profesores ordenados por edad.");
		TypedQuery<Profesor> hqlQuery2 = session.createQuery("SELECT p FROM  Profesor p ORDER BY edad DESC"); // ASC
		List<Profesor> profesores2 = hqlQuery2.getResultList(); 
		
		Iterator<Profesor> it2 = profesores2.iterator();
		while(it2.hasNext()) {
			Profesor profesor = it2.next();
			System.out.println(profesor.getNombre() + " - " + profesor.getApellido() +" - " + profesor.getEdad());
		}
		
		
		
		System.out.println("Listar el nombre de todos los profesores que tengan más de treinta años y tengan más de 5 años de experiencia.");
		TypedQuery<Profesor> hqlQuery3 = session.createQuery("SELECT p FROM  Profesor p WHERE p.edad>5 AND p.aniosExperiencia >5"); // ASC
		List<Profesor> profesores3 = hqlQuery3.getResultList(); 
		
		Iterator<Profesor> it3 = profesores3.iterator();
		while(it3.hasNext()) {
			Profesor profesor = it3.next();
			System.out.println(profesor.getNombre() );
		}
		
		
		
		System.out.println("Listar el nombre de todos los profesores que tengan más de treinta años o tengan más de 5 años de experiencia.");
		TypedQuery<Profesor> hqlQuery4 = session.createQuery("SELECT p FROM  Profesor p WHERE p.edad>30 OR p.aniosExperiencia >5"); // ASC
		List<Profesor> profesores4 = hqlQuery4.getResultList(); 
		
		Iterator<Profesor> it4 = profesores4.iterator();
		while(it4.hasNext()) {
			Profesor profesor = it4.next();
			System.out.println(profesor.getNombre() + " - " + profesor.getEdad() +" - " + profesor.getAniosExperiencia());
		}
		
		
		System.out.println("Listar el nombre de todos los profesores que tengan un nombre de menos de seis caracteres (where length(p.nombre)<?).");
		TypedQuery<Profesor> hqlQuery5 = session.createQuery("SELECT p FROM  Profesor p WHERE  length(p.nombre)<6"); // ASC
		List<Profesor> profesores5 = hqlQuery5.getResultList(); 
		
		Iterator<Profesor> it5 = profesores5.iterator();
		while(it5.hasNext()) {
			Profesor profesor = it5.next();
			System.out.println(profesor.getNombre() + " - " + profesor.getEdad() +" - " + profesor.getAniosExperiencia());
		}
		
		
		
		System.out.println("Listar el nombre de todos los profesores que hayan impartido un curso de más de 500 euros.");
		TypedQuery<Profesor> hqlQuery6 = session.createQuery("SELECT p FROM  Profesor p JOIN p.cursos c WHERE c.precio>500"); // ASC
		List<Profesor> profesores6 = hqlQuery6.getResultList(); 
		
		Iterator<Profesor> it6 = profesores6.iterator();
		while(it6.hasNext()) {
			Profesor profesor = it6.next();
			System.out.println(profesor.getNombre());
		}
		
		
		
		System.out.println("Listar el nombre de todos los profesores que hayan impartido un curso de más de 500 euros. Mostrar cuanto ćostó dicho curso.");
		TypedQuery<ProfesorPrecio> hqlQuery7 = session.createQuery("SELECT new escuela.ProfesorPrecio(p, c.precio) FROM  Profesor p JOIN p.cursos c WHERE c.precio>500"); // ASC
		List<ProfesorPrecio> profesorPrecio = hqlQuery7.getResultList(); 
		
		Iterator<ProfesorPrecio> it7 = profesorPrecio.iterator();
		while(it7.hasNext()) {
			ProfesorPrecio r = it7.next();
			System.out.println(r.getProfesor().getNombre()+ " - " + r.getPrecio());
		}
		session.close();
	}

}
