package com.pablomonteserin.futbol.controller;

import java.util.ArrayList;
import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.ModelMap;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.servlet.ModelAndView;

import com.pablomonteserin.futbol.persistence.model.Equipo;
import com.pablomonteserin.futbol.persistence.model.Jugador;
import com.pablomonteserin.futbol.persistence.repository.EquipoRepository;

@Controller
public class EquipoController {
	
	@Autowired
	private EquipoRepository equipoRepository;

	@RequestMapping(path = "/", method = RequestMethod.GET)
	public ModelAndView selectEquipos(ModelMap model) {
		Iterable<Equipo> equipos = equipoRepository.findAll();
		List<Equipo> listaEquipos = new ArrayList<>();
		equipos.forEach(listaEquipos::add);

		ModelAndView modelo = new ModelAndView("consulta");
		modelo.addObject("equipos", listaEquipos);
		model.addAttribute("equipos", equipos);
		return modelo;
	}

	@RequestMapping(path = "/consulta_equipo_por_id", method = RequestMethod.GET)
//Los parámetros del método son los datos que recibo de la vista
	public ModelAndView selectEquipo(@ModelAttribute("equipo_cod") Integer equipo_cod, ModelMap model) {
	Equipo equipo = new Equipo();
		equipo = equipoRepository.findEquipoByEquipoCod(equipo_cod);
		List<Jugador>jugadores = equipoRepository.findJugadoresByEquipoCod(equipo_cod);
		
		ModelAndView modelo = new ModelAndView("equipo");
		model.addAttribute("equipo", equipo);
		model.addAttribute("jugadores", jugadores);
		return modelo;
	}
}