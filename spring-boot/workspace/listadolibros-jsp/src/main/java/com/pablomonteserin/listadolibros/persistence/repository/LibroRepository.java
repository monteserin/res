package com.pablomonteserin.listadolibros.persistence.repository;

import java.util.List;

import org.springframework.data.repository.CrudRepository;

import com.pablomonteserin.listadolibros.persistence.model.Libro;


public interface LibroRepository extends CrudRepository<Libro, Integer> {
	   List<Libro> findAll();
}
