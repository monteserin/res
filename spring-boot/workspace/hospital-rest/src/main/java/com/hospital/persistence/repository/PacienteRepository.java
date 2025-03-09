package com.hospital.persistence.repository;

import java.util.List;

import org.springframework.data.repository.CrudRepository;

import com.hospital.entities.Paciente;


public interface PacienteRepository extends CrudRepository<Paciente, Integer> {
	List<Paciente> findAll();
	
	Paciente findById(int id);
}
