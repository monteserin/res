package com.usingJWT.usingJWT.repository;

import java.util.List;

import org.springframework.data.repository.CrudRepository;

import com.usingJWT.usingJWT.entities.Equipo;


public interface EquipoRepository extends CrudRepository<Equipo, Integer> {
	List<Equipo> findAll();


}
