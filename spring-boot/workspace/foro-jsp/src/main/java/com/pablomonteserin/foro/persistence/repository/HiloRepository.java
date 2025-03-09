package com.pablomonteserin.foro.persistence.repository;

import org.springframework.data.repository.CrudRepository;

import com.pablomonteserin.foro.persistence.model.Hilo;


public interface HiloRepository extends CrudRepository<Hilo, Integer> {

}
