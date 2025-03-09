package com.pablomonteserin.foro.controller;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.CrossOrigin;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RestController;

import com.pablomonteserin.foro.persistence.model.Comentario;
import com.pablomonteserin.foro.persistence.repository.ComentarioRepository;

@CrossOrigin
@RestController
public class ComentarioController {
	@Autowired
	private ComentarioRepository comentarioRepository;

	@GetMapping("/comentario/{hiloId}")
	public List<Comentario> getCommentarios(@PathVariable("hiloId") Integer hiloId) {
		List<Comentario> comentarios = comentarioRepository.findComentarios(hiloId);
		return comentarios;
	}
	
	@CrossOrigin
	@PostMapping("/comentario")
	public Comentario createComentario(@RequestBody Comentario comentario) {
		comentarioRepository.save(comentario);
		return null;
	}
}