package com.pablomonteserin.foro.controller;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.servlet.ModelAndView;

import com.pablomonteserin.foro.persistence.model.Comentario;
import com.pablomonteserin.foro.persistence.model.Hilo;
import com.pablomonteserin.foro.persistence.repository.ComentarioRepository;
import com.pablomonteserin.foro.persistence.repository.HiloRepository;

@Controller
public class HiloController {
	@Autowired
	private HiloRepository hiloRepository;
	@Autowired 
	private ComentarioRepository comentarioRepository;

	@GetMapping("/create-hilo2")
	public ModelAndView createHilo2(@ModelAttribute("Hilo") Hilo hilo, Model model) {
		hiloRepository.save(hilo);
		return new ModelAndView("menu");
	}

	@GetMapping("/consulta-hilos")
	public String consultaHilos(Model model) {
		List<Hilo> hilos = hiloRepository.findAll();
		model.addAttribute("hilos", hilos);
		return "ver-hilos";
	}

	@GetMapping("/consulta-hilo/{id}")
	public String consultaHilo(@PathVariable int id, Model model) {
		Hilo hilo = hiloRepository.findById(id).get();
		List<Comentario> comentarios = comentarioRepository.findComentarios(id);
		model.addAttribute("hilo", hilo);
		model.addAttribute("comentarios", comentarios);
		return "consulta-hilo";
	}

}