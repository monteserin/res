package com.pablomonteserin.mensajeria.controller;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.CrossOrigin;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import com.pablomonteserin.mensajeria.persistence.model.Mensaje;
import com.pablomonteserin.mensajeria.persistence.repository.MensajeRepository;

@CrossOrigin
@RestController
@RequestMapping("/message")
public class MensajeriaController {
	@Autowired
	private MensajeRepository mensajeRepository;

	@PostMapping
	public void createMensaje(@RequestBody Mensaje mensaje) {
		mensajeRepository.save(mensaje);
	}

	@GetMapping("/{id}")
	public List<Mensaje> consultaMensajes(@PathVariable("id") Integer id) {
		List<Mensaje> mensajes = mensajeRepository.findMensajesFromIdRemitente(id);
		return mensajes;
	}

}