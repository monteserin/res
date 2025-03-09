package com.pablomonteserin.foro.controller;

import java.util.ArrayList;
import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.ModelMap;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.servlet.ModelAndView;

import com.pablomonteserin.foro.persistence.model.Hilo;
import com.pablomonteserin.foro.persistence.repository.HiloRepository;

@Controller
public class HiloController {
	@Autowired
	private HiloRepository hiloRepository;

	@RequestMapping(path = "/create-hilo1", method = RequestMethod.GET)
	public ModelAndView createHilo1(ModelMap model) {
			return new ModelAndView("crear-hilo");
	}
	
	@RequestMapping(path = "/create-hilo2", method = RequestMethod.GET)
	public ModelAndView createHilo2(@ModelAttribute("Hilo")Hilo hilo,ModelMap model) {
		model.addAttribute("nombre", hilo.getTitulo());
		model.addAttribute("nombre", hilo.getTxt());
		
		hiloRepository.save(hilo);
		return new ModelAndView("menu");
	}

	@RequestMapping(path = "/consulta-hilos", method = RequestMethod.GET)
	public ModelAndView consultaHilos(ModelMap model) {
		Iterable<Hilo> hilosIterables = hiloRepository.findAll();
		List<Hilo> hilos = new ArrayList<>();
		hilosIterables.forEach(hilos::add);

		ModelAndView modelo = new ModelAndView("ver-hilos");
		model.addAttribute("hilos", hilos);
		
		return modelo;
	}
	
	@RequestMapping(path = "/consulta-hilo", method = RequestMethod.GET)
	public ModelAndView consultaHilo(@ModelAttribute("pacienteId")int id,ModelMap model) {
		Hilo hilo = hiloRepository.findById(id).get();
			

		ModelAndView modelo = new ModelAndView("consulta-hilo");
		model.addAttribute("hilo", hilo);
		return modelo;
	}

}