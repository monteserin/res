package com.pablomonteserin.prueba.controller;

import java.io.IOException;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.ModelAttribute;

import com.pablomonteserin.prueba.entities.Persona;
import com.pablomonteserin.prueba.repository.PersonaRepository;

@Controller
public class PersonaController {

	@Autowired
	PersonaRepository personaRepository;

	@GetMapping("/createPersona")
	public String darDeAlta(@ModelAttribute("persona") Persona persona) throws IOException {

		personaRepository.save(persona);
		return "forward:index.html";
	}
}
