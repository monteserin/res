package com.futbol.persistence.repository;

import java.util.List;

import org.springframework.data.repository.CrudRepository;

import com.futbol.entities.Equipo;

public interface FutbolRepository extends CrudRepository<Equipo, Integer> {
	List<Equipo> findAll();


}
