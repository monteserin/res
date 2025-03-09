package com.pablomonteserin.listatareas.controller;

import java.text.SimpleDateFormat;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.CrossOrigin;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RestController;

import com.pablomonteserin.listatareas.persistence.model.Usuario;
import com.pablomonteserin.listatareas.persistence.repository.UsuarioRepository;


@CrossOrigin
@RestController
public class UsuarioController {
	private SimpleDateFormat simpleDateFormat = new SimpleDateFormat("yyyy-mm-dd");

	@Autowired
	private UsuarioRepository usuarioRepository;

	@GetMapping("/user/{nombre}")
	public int login(@PathVariable("nombre") String nombre ) {
		Usuario u = usuarioRepository.findUsuario(nombre);
		if (u == null) {
			Usuario u2 = new Usuario();
			u2.setNombre(nombre);
			Usuario u3 = usuarioRepository.save(u2);
			return u3.getId();
		} 
		return u.getId();
	}


}