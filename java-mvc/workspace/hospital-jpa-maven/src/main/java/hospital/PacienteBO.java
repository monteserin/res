package hospital;

import java.util.List;

import javax.persistence.EntityManager;
import javax.persistence.Query;
import javax.persistence.TypedQuery;

public class PacienteBO {

	public List<Paciente> consultarPacientes(){
		EntityManager em = EntityManagerSingleton.getEntityManager();
		Query q =em.createQuery("SELECT p FROM Paciente p");
		List<Paciente> pacientes = q.getResultList();
		return pacientes;	
	}
	
	public Paciente consultarPacientePorId(int id){
		EntityManager em = EntityManagerSingleton.getEntityManager();
		TypedQuery<Paciente>  q =em.createQuery("SELECT p FROM Paciente p WHERE p.id = (:id)", Paciente.class);
		q.setParameter("id", id);
		Paciente paciente = q.getSingleResult();
		em.close();
		return paciente;	
	}
	
	public void altaPaciente(Paciente paciente){
		EntityManager em = EntityManagerSingleton.getEntityManager();
		em.getTransaction().begin();
		em.persist(paciente);
		em.getTransaction().commit();
		em.close();
	}
	public void actualizar(Paciente paciente){
		EntityManager em = EntityManagerSingleton.getEntityManager();
		em.getTransaction().begin();
		em.merge(paciente);
		em.getTransaction().commit();
		em.close();
	}
	
	public void borrar(int id){
		EntityManager em = EntityManagerSingleton.getEntityManager();
		em.getTransaction().begin();
		Paciente paciente = em.find(Paciente.class, id);
		em.remove(paciente);
		em.getTransaction().commit();
		em.close();
	}
}
