package borrame;

import javax.persistence.EntityManager;

public class Main {
public static void main(String[] args) {
	  EntityManager em = EntityManagerSingleton.getEntityManager();
      
   Libro l = new Libro();
   l.setTitle("aaaa");
   l.setPrecio(32);
   
      
      try {
          em.getTransaction().begin();
          em.persist(l);
          em.getTransaction().commit();

      } catch (Exception e) {
          e.printStackTrace();
      }finally {
          em.close();
      }
  }
}
