package com.pablomonteserin.ListaInvitados.controller;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.ModelAttribute;

import com.pablomonteserin.ListaInvitados.persistence.model.Invitado;
import com.pablomonteserin.ListaInvitados.persistence.repository.InvitadoRepository;


@Controller
public class InvitadoController {

	@Autowired
	private InvitadoRepository invitadoRepository;

	@GetMapping("/createInvitado")
	public String createInvitado(@ModelAttribute("invitado")Invitado invitado) {
		invitadoRepository.save(invitado);
		return "forward:index.html";
	}
	
	@GetMapping("/deleteInvitado")
	public String deleteInvitado(@ModelAttribute("invitado")Invitado invitado) {
		invitadoRepository.delete(invitado);
		return "forward:index.html";
	}
	
	
	@GetMapping("/consultaInvitados")
	public String selectInvitados( Model model) {
		List<Invitado> invitados = invitadoRepository.findAll();
		model.addAttribute("invitados", invitados);
		return "consulta.html";
	}
	

}