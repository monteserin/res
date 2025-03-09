package com.usingJWT.usingJWT.controller;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.CrossOrigin;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RestController;

import com.usingJWT.usingJWT.entities.Equipo;
import com.usingJWT.usingJWT.repository.EquipoRepository;
import com.usingJWT.usingJWT.repository.JugadorRepository;


@CrossOrigin
@RestController
public class FutbolController {
	
	@Autowired
	private EquipoRepository equipoRepository;
	@Autowired
	private JugadorRepository jugadorRepository;
	
	
	@GetMapping("/equipos")
	public List<Equipo> getCommentarios() {
		List<Equipo> equipos = equipoRepository.findAll();
		return equipos;
	}
}
