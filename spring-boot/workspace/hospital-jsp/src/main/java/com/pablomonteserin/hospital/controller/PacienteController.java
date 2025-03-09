package com.pablomonteserin.hospital.controller;

import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.util.ArrayList;
import java.util.Date;
import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.ModelMap;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.servlet.ModelAndView;

import com.pablomonteserin.hospital.persistence.model.Paciente;
import com.pablomonteserin.hospital.persistence.repository.PacienteRepository;

@Controller
public class PacienteController {
	private SimpleDateFormat simpleDateFormat = new SimpleDateFormat("yyyy-mm-dd");
	@Autowired
	private PacienteRepository pacienteRepository;

	@RequestMapping(path = "/createPaciente", method = RequestMethod.GET)
	public String createPaciente(@ModelAttribute("nombre")String nombre, @ModelAttribute("apellidos")String apellidos,@ModelAttribute("fecha_alta")String fechaAlta,ModelMap model) {
		Paciente paciente = new Paciente();
		paciente.setNombre(nombre);
		paciente.setApellidos(apellidos);

		try {
			Date fechaAltaDate=simpleDateFormat.parse(fechaAlta);
			paciente.setFecha_alta(fechaAltaDate);
		} catch (ParseException e) {
			e.printStackTrace();
			System.out.println("Algo salió mal");
		}
		
		
		pacienteRepository.save(paciente);
		return "redirect:index.html";
	}

	@RequestMapping(path = "/deletePaciente", method = RequestMethod.GET)
	public String deleteInvitado(@ModelAttribute("paciente") Paciente paciente, ModelMap model) {
		model.addAttribute("nombre", paciente.getNombre());
		pacienteRepository.delete(paciente);
		return "redirect:index.html";
	}

	@RequestMapping(path = "/consultaPacientes", method = RequestMethod.GET)
	public ModelAndView consultaPacientes(ModelMap model) {
		Iterable<Paciente> pacientesIterables = pacienteRepository.findAll();
		List<Paciente> pacientes = new ArrayList<>();
		pacientesIterables.forEach(pacientes::add);

		ModelAndView modelo = new ModelAndView("consulta");
		modelo.addObject("pacientes", pacientes);
		model.addAttribute("pacientes", pacientes);
		return modelo;
	}
	
	@RequestMapping(path = "/consultaPaciente", method = RequestMethod.GET)
	public ModelAndView consultaPaciente(@ModelAttribute("pacienteId")int id,ModelMap model) {
		Paciente paciente = pacienteRepository.findById(id).get();
		

		ModelAndView modelo = new ModelAndView("consulta-paciente");
		model.addAttribute("paciente", paciente);
		return modelo;
	}
	
	@RequestMapping(path = "/modificaPaciente", method = RequestMethod.GET)
	public String modificaPaciente(@ModelAttribute("identificador")Integer id, @ModelAttribute("nombre")String nombre, @ModelAttribute("apellidos")String apellidos,@ModelAttribute("fecha_alta")String fechaAlta,ModelMap model) {
		Paciente paciente = new Paciente();
		paciente.setNombre(nombre);
		paciente.setApellidos(apellidos);
		paciente.setId(id);
		try {
			Date fechaAltaDate=simpleDateFormat.parse(fechaAlta);
			paciente.setFecha_alta(fechaAltaDate);
		} catch (ParseException e) {
			e.printStackTrace();
			System.out.println("Algo salió mal");
		}
		
		
		pacienteRepository.save(paciente);
		return "redirect:index.html";
	}

}