package com.futbol.controller;

import java.text.SimpleDateFormat;
import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;

import com.futbol.entities.Equipo;
import com.futbol.entities.Jugador;
import com.futbol.persistence.repository.FutbolRepository;
import com.futbol.persistence.repository.JugadorRepository;

@Controller
public class EquipoController {
	private SimpleDateFormat simpleDateFormat = new SimpleDateFormat("yyyy-mm-dd");
	@Autowired
	private FutbolRepository futbolRepository;
	@Autowired
	private JugadorRepository jugadorRepository;

	@GetMapping("/")
	public String consultaEquipos(Model model) {
		List<Equipo> equipos = futbolRepository.findAll();
		model.addAttribute("equipos", equipos);
		return "consulta";
	}

	@GetMapping("/consulta-equipo-por-id/{equipoId}")
	public String consultaEquipo(@PathVariable("equipoId") int id, Model model) {
		Equipo equipo = futbolRepository.findById(id).get();
		model.addAttribute("equipo", equipo);

		List<Jugador> jugadores = jugadorRepository.findAllByEquipoCod(id);
		model.addAttribute("jugadores", jugadores);

		return "equipo";
	}

}