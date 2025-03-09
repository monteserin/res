package com.pablomonteserin.prueba.repository;

import org.springframework.data.repository.CrudRepository;

import com.pablomonteserin.prueba.entities.Persona;

public interface PersonaRepository extends CrudRepository<Persona, Integer> {

}