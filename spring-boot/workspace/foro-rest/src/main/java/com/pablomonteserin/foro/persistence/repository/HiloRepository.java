package com.pablomonteserin.foro.persistence.repository;

import java.util.List;

import org.springframework.data.repository.CrudRepository;

import com.pablomonteserin.foro.persistence.model.Hilo;

public interface HiloRepository extends CrudRepository<Hilo, Integer> {
	List<Hilo> findAll();
	Hilo findById(int id);

}
