package com.pablomonteserin.futbol.persistence.repository;

import java.util.ArrayList;

import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.CrudRepository;
import org.springframework.data.repository.query.Param;

import com.pablomonteserin.futbol.persistence.model.Equipo;
import com.pablomonteserin.futbol.persistence.model.Jugador;


public interface EquipoRepository extends CrudRepository<Equipo, Integer> {

	@Query("SELECT e FROM Equipo e WHERE e.equipo_cod=:id")
	Equipo findEquipoByEquipoCod(@Param("id")int id);
	
	
	@Query("SELECT j FROM Jugador j WHERE j.equipo_cod=:id")
	ArrayList<Jugador> findJugadoresByEquipoCod(@Param("id")int id);
}
