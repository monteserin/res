package com.pablomonteserin.mensajeria.controller;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.CrossOrigin;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import com.pablomonteserin.mensajeria.persistence.model.Usuario;
import com.pablomonteserin.mensajeria.persistence.repository.UsuarioRepository;

@RestController
@CrossOrigin
@RequestMapping("/user")
public class UsuarioController {

	@Autowired
	private UsuarioRepository usuarioRepository;

	@GetMapping("/{nombre}")
	public Integer login(@PathVariable String nombre) {

		Usuario u = usuarioRepository.findUsuario(nombre);
		if (u == null) {
			Usuario newUsuario = new Usuario();
			newUsuario.setNombre(nombre);
			Usuario u2 = usuarioRepository.save(newUsuario);
			return u2.getId();
		}
		return u.getId();
	}

	@GetMapping
	public List<Usuario> getUsers() {
		List<Usuario> usuarios = usuarioRepository.findAll();
		return usuarios;
	}

}