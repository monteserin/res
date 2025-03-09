package com.pablomonteserin.hospital.persistence.repository;

import org.springframework.data.repository.CrudRepository;

import com.pablomonteserin.hospital.persistence.model.Paciente;


public interface PacienteRepository extends CrudRepository<Paciente, Integer> {

}
