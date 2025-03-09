package com.pablomonteserin.listadolibros.controller;

import java.io.IOException;
import java.util.ArrayList;
import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.ModelMap;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.servlet.ModelAndView;

import com.pablomonteserin.listadolibros.persistence.model.Libro;
import com.pablomonteserin.listadolibros.persistence.repository.LibroRepository;

@Controller // @RestController
public class LibroController {	
	
	@Autowired
	private LibroRepository libroRepository;
	
	@RequestMapping(path = "/", method = RequestMethod.GET)
	public ModelAndView selectInvitados( ModelMap model) {
		Iterable<Libro> invitados = libroRepository.findAll();
		List<Libro> listInvitados = new ArrayList<>();
		invitados.forEach(listInvitados::add);
		
		ModelAndView modelo = new ModelAndView("consulta");
		model.addAttribute("libros", invitados);
		return modelo;
	}
	
	@RequestMapping(path = "/create-libro", method = RequestMethod.GET)
	public ModelAndView createLibro(@ModelAttribute("libro")Libro libro, ModelMap model) {
		model.addAttribute("titulo", libro.getTitulo());
		model.addAttribute("precio", libro.getPrecio());

		libroRepository.save(libro);
	
		Iterable<Libro> libros = libroRepository.findAll();
		List<Libro> listLibros = new ArrayList<>();
		libros.forEach(listLibros::add);
		
		ModelAndView modelo = new ModelAndView("consulta");
		model.addAttribute("libros", libros);
		return modelo;
	}
	
	
	@RequestMapping(path = "/deletelibro", method = RequestMethod.GET)
	public ModelAndView deleteLibro(@ModelAttribute("id")Integer id, ModelMap model) {

		Libro l = new Libro();
		l.setId(id);
		model.addAttribute("id",id);

		libroRepository.delete(l);
	
		Iterable<Libro> libros = libroRepository.findAll();
		List<Libro> listLibros = new ArrayList<>();
		libros.forEach(listLibros::add);
		
		ModelAndView modelo = new ModelAndView("consulta");
		model.addAttribute("libros", libros);
		return modelo;
	}
	
	@RequestMapping(path = "/modificarlibro", method = RequestMethod.GET)
	public ModelAndView updateLibro(@ModelAttribute("libro")Libro libro, ModelMap model) {
		model.addAttribute("titulo", libro.getTitulo());
		model.addAttribute("precio", libro.getPrecio());
		model.addAttribute("id", libro.getId());

		libroRepository.save(libro);
	
		Iterable<Libro> libros = libroRepository.findAll();
		List<Libro> listLibros = new ArrayList<>();
		libros.forEach(listLibros::add);
		
		ModelAndView modelo = new ModelAndView("consulta");
		model.addAttribute("libros", libros);
		return modelo;
	}
	
}