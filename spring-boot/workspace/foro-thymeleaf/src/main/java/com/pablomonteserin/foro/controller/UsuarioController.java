package com.pablomonteserin.foro.controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.ModelAttribute;

import com.pablomonteserin.foro.persistence.model.Usuario;
import com.pablomonteserin.foro.persistence.repository.UsuarioRepository;

@Controller
public class UsuarioController {
	@Autowired
	private UsuarioRepository usuarioRepository;

	@GetMapping("/login")
	public String Login(@ModelAttribute("usuario") Usuario usuario, Model model) {
		usuarioRepository.save(usuario);
		return "menu";
	}
}