package com.pablomonteserin.ListaInvitados.controller;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.CrossOrigin;
import org.springframework.web.bind.annotation.DeleteMapping;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import com.pablomonteserin.ListaInvitados.persistence.model.Invitado;
import com.pablomonteserin.ListaInvitados.persistence.repository.InvitadoRepository;

@CrossOrigin
@RestController
@RequestMapping("/persons")
public class InvitadoController {

	@Autowired
	private InvitadoRepository invitadoRepository;
	
	@PostMapping
	public void createInvitado(@RequestBody Invitado invitado) {
		invitadoRepository.save(invitado);
	}

	@DeleteMapping("/{id}")
	public void deleteInvitado(@PathVariable("id") Integer id) {
		Invitado i = new Invitado();
		i.setId(id);
		invitadoRepository.delete(i);
	}
	
	@GetMapping
	public List<Invitado> selectInvitados() {
		List<Invitado> invitados = invitadoRepository.findAll();
		return invitados;
	}

}