package com.hospital.controller;

import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.util.Date;
import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.ui.ModelMap;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestParam;

import com.hospital.entities.Paciente;
import com.hospital.persistence.repository.PacienteRepository;

import jakarta.websocket.server.PathParam;

@Controller
public class PacienteController {
	private SimpleDateFormat simpleDateFormat = new SimpleDateFormat("yyyy-mm-dd");
	@Autowired
	private PacienteRepository pacienteRepository;

	@GetMapping("/createPaciente")
	public String createPaciente(@RequestParam("nombre") String nombre, @RequestParam("apellidos") String apellidos,
			@RequestParam("fecha_alta") String fechaAlta, Model model) {
		Paciente paciente = new Paciente();
		paciente.setNombre(nombre);
		paciente.setApellidos(apellidos);

		try {
			Date fechaAltaDate = simpleDateFormat.parse(fechaAlta);
			paciente.setFecha_alta(fechaAltaDate);
		} catch (ParseException e) {
			e.printStackTrace();
			System.out.println("Algo salió mal");
		}

		pacienteRepository.save(paciente);
		return "forward:index.html";
	}

	@GetMapping("/deletePaciente")
	public String deleteInvitado(@ModelAttribute("paciente") Paciente paciente, ModelMap model) {
		model.addAttribute("nombre", paciente.getNombre());
		pacienteRepository.delete(paciente);
		return "forward:index.html";
	}

	@GetMapping("/consultaPacientes")
	public String consultaPacientes(Model model) {
		List<Paciente> pacientes = pacienteRepository.findAll();
		model.addAttribute("pacientes", pacientes);
		return "consulta";
	}

	@GetMapping("/consultaPaciente/{pacienteId}")
	public String consultaPaciente(@PathVariable("pacienteId") int id, Model model) {
		Paciente paciente = pacienteRepository.findById(id).get();
		model.addAttribute("paciente", paciente);
		return "consulta-paciente";
	}

	@GetMapping("/modificaPaciente")
	public String modificaPaciente(@RequestParam("identificador") Integer id, @RequestParam("nombre") String nombre,
			@RequestParam("apellidos") String apellidos, @RequestParam("fecha_alta") String fechaAlta, Model model) {
		Paciente paciente = new Paciente();
		paciente.setNombre(nombre);
		paciente.setApellidos(apellidos);
		paciente.setId(id);
		try {
			Date fechaAltaDate = simpleDateFormat.parse(fechaAlta);
			paciente.setFecha_alta(fechaAltaDate);
		} catch (ParseException e) {
			e.printStackTrace();
			System.out.println("Algo salió mal");
		}

		pacienteRepository.save(paciente);
		return "forward:index.html";
	}

}