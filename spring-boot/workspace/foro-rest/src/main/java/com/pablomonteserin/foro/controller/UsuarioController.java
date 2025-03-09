package com.pablomonteserin.foro.controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.CrossOrigin;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.RestController;

import com.pablomonteserin.foro.persistence.model.Usuario;
import com.pablomonteserin.foro.persistence.repository.UsuarioRepository;

@CrossOrigin
@RestController
public class UsuarioController {
	@Autowired
	private UsuarioRepository usuarioRepository;

	@GetMapping("/user/{nombre}")
	public Usuario login(@PathVariable("nombre") String nombre) {
		Usuario user = usuarioRepository.findByNombre(nombre);
		return user;
	}

	@PostMapping("/user")
	public Usuario create(@RequestBody Usuario usuario) {
		usuarioRepository.save(usuario);
		return null;
	}
}