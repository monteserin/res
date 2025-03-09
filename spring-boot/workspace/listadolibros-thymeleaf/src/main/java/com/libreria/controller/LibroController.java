package com.libreria.controller;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.RequestParam;

import com.libreria.entities.Libro;
import com.libreria.persistence.repository.LibroRepository;

@Controller
public class LibroController {
	@Autowired
	private LibroRepository libroRepository;

	@GetMapping("/")
	public String selectLibros(Model model) {
		List<Libro> libros = libroRepository.findAll();
		model.addAttribute("libros", libros);
		return "consulta";
	}

	@GetMapping("/create-libro")
	public String createLibro(@ModelAttribute("libro") Libro libro) {
		libroRepository.save(libro);
		return "redirect:/";
	}

	@GetMapping("/deletelibro")
	public String deleteLibro(@RequestParam("idNumber") Integer id) {

		Libro l = new Libro();
		l.setId(id);

		libroRepository.delete(l);
		return "redirect:/";

	}

	@GetMapping("/modificarlibro")
	public String updateLibro(@RequestParam("titulo") String titulo, @RequestParam("precio") Integer precio, @RequestParam("idNumber") Integer idNumber) {
		Libro libro = new Libro();
		libro.setId(idNumber);
		libro.setPrecio(precio);
		libro.setTitulo(titulo);
		libroRepository.save(libro);
		return "redirect:/";
	}

}