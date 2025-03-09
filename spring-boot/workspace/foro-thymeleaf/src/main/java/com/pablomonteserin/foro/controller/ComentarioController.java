package com.pablomonteserin.foro.controller;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;

import com.pablomonteserin.foro.persistence.model.Comentario;
import com.pablomonteserin.foro.persistence.repository.ComentarioRepository;

@Controller
public class ComentarioController {
	@Autowired
	private ComentarioRepository comentarioRepository;


	@PostMapping("/comentario")
	public String createComentario(@ModelAttribute Comentario comentario) {
		System.out.println(comentario);		
		comentarioRepository.save(comentario);
		return "menu";
	}
}