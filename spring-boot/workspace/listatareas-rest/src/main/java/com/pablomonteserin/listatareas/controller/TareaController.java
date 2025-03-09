package com.pablomonteserin.listatareas.controller;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.CrossOrigin;
import org.springframework.web.bind.annotation.DeleteMapping;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.PutMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import com.pablomonteserin.listatareas.persistence.model.Tarea;
import com.pablomonteserin.listatareas.persistence.model.Usuario;
import com.pablomonteserin.listatareas.persistence.repository.TareaRepository;

@CrossOrigin
@RestController
@RequestMapping("/tarea")
public class TareaController {

	// http://localhost:8080/tarea/1
	
	@Autowired
	private TareaRepository tareaRepository;
	
	@PostMapping
	public void createTarea(@RequestBody Tarea tarea) {
		tareaRepository.save(tarea);
	}

	@DeleteMapping("/{id}")
	public void deleteTarea(@PathVariable("id") Integer id) {
		Tarea i = new Tarea();
		i.setId(id);
		tareaRepository.delete(i);
	}
	
	@GetMapping("/{userId}")
	public List<Tarea> getTareaById(@PathVariable("userId") Integer userId) {
		Usuario usuario = new Usuario();
		usuario.setId(userId);
		List<Tarea> tareas = tareaRepository.findByUsuario(usuario);
		//List<Tarea> tareas = tareaRepository.findByUsuarioWithProperties(usuario);
		System.out.println("Tareas del usuario " + userId + ": " + tareas.size());

		return tareas;
	}
	
	@PutMapping("/{taskId}")
	public void updateTask(@PathVariable("taskId") Integer taskId, @RequestBody Tarea tarea) {
		tarea.setId(taskId);
		tareaRepository.save(tarea);
	}

}