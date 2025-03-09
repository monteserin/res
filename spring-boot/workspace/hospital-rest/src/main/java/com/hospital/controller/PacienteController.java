package com.hospital.controller;

import java.text.SimpleDateFormat;
import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.CrossOrigin;
import org.springframework.web.bind.annotation.DeleteMapping;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.PutMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import com.hospital.entities.Paciente;
import com.hospital.persistence.repository.PacienteRepository;

@RestController
@CrossOrigin
@RequestMapping("/pacient")
public class PacienteController {
	@Autowired
	private PacienteRepository pacienteRepository;

	@PostMapping
	public void createPaciente(@RequestBody Paciente paciente) {
		pacienteRepository.save(paciente);
	}

	@DeleteMapping("/{id}")
	public void deleteInvitado(@PathVariable("id") Integer id) {
		Paciente p = new Paciente();
		p.setId(id);
		pacienteRepository.delete(p);
	}

	@GetMapping
	public List<Paciente> consultaPacientes() {
		List<Paciente> pacientes = pacienteRepository.findAll();
		return pacientes;
	}

	@GetMapping("/{pacienteId}")
	public Paciente consultaPaciente(@PathVariable("pacienteId") int id) {
		Paciente paciente = pacienteRepository.findById(id);
		return paciente;
	}

	@PutMapping("/{id}")
	public void modificaPaciente(@RequestBody Paciente paciente, @PathVariable("id") Integer id) {
		paciente.setId(id);
		pacienteRepository.save(paciente);
	}

}