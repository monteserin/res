package relaciones2.main;

import javax.persistence.EntityManager;
import javax.persistence.EntityManagerFactory;
import javax.persistence.Persistence;

import relaciones2.entities.Cuenta;
import relaciones2.entities.Sucursal;

public class Main {

	public static void main(String[] args) {
		  EntityManagerFactory emf = Persistence.createEntityManagerFactory("TEST_PERSISTENCE_JPA");
	        EntityManager em = emf.createEntityManager();
	      
	        Sucursal s = new Sucursal();
	        s.setDireccion("direccion");
	        s.setTfno("telefono");
	        s.setnSucursal(456);
	       
	        Cuenta c = new Cuenta();
	        c.setSaldo(2333);
	        c.setnCuenta(234);
	        c.setSucursal(s);

	        
	        try {
	            em.getTransaction().begin();
	            em.persist(s);
	            em.persist(c);
	            em.getTransaction().commit();

	        } catch (Exception e) {
	            e.printStackTrace();
	        }finally {
	            em.close();
	        }
	}

}
