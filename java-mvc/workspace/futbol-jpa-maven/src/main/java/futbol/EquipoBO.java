package futbol;

import java.util.List;

import javax.persistence.EntityManager;
import javax.persistence.Query;
import javax.persistence.TypedQuery;

import futbol.entity.Equipo;
import futbol.entity.Jugador;

public class EquipoBO {

	public List<Equipo> consultarEquipos(){
		EntityManager em = EntityManagerSingleton.getEntityManager();
		TypedQuery<Equipo> q = em.createQuery("SELECT e FROM Equipo e", Equipo.class);
		List<Equipo> equipos = q.getResultList();
		em.close();
		return equipos;	
	}
	
	public List<Jugador> consultarJugadores(int equipo_cod){
		EntityManager em = EntityManagerSingleton.getEntityManager();
		TypedQuery<Jugador> q =em.createQuery("SELECT j FROM Jugador j WHERE j.equipo_cod = (:equipo_cod)",  Jugador.class);
		q.setParameter("equipo_cod", 4);
		List<Jugador> jugadores = q.getResultList();
		em.close();
		return jugadores;	
	}
}
