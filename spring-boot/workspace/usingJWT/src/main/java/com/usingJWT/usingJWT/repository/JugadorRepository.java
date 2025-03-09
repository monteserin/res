package com.usingJWT.usingJWT.repository;

import java.util.List;

import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.CrudRepository;

import com.usingJWT.usingJWT.entities.Jugador;


public interface JugadorRepository extends CrudRepository<Jugador, Integer> {

	@Query("SELECT j FROM Jugador j WHERE j.equipoCod=:equipoCod")
	List<Jugador> findAllByEquipoCod(int equipoCod);

}
