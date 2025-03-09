package com.pablomonteserin.foro.controller;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.CrossOrigin;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RestController;

import com.pablomonteserin.foro.persistence.model.Hilo;
import com.pablomonteserin.foro.persistence.repository.HiloRepository;

@CrossOrigin
@RestController
public class HiloController {
	@Autowired
	private HiloRepository hiloRepository;

	@PostMapping("/hilo/")
	public String createHilo(@RequestBody Hilo hilo) {
		hiloRepository.save(hilo);
		return null;
	}

	@GetMapping("/hilo/")
	public List<Hilo> consultaHilos() {
		List<Hilo> hilos = hiloRepository.findAll();
		return hilos;
	}

	@GetMapping("/hilo/{hiloId}")
	public Hilo consultaHilo(@PathVariable("hiloId") int hiloId) {
		Hilo hilo = hiloRepository.findById(hiloId);
		return hilo;
	}

}