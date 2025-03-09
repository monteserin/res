package com.libreria.persistence.repository;

import java.util.List;

import org.springframework.data.repository.CrudRepository;

import com.libreria.entities.Libro;

public interface LibroRepository extends CrudRepository<Libro, Integer> {
	List<Libro> findAll();

}
