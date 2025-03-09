package com.pablomonteserin.foro.controller;

import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.util.ArrayList;
import java.util.Date;
import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.ModelMap;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.servlet.ModelAndView;

import com.pablomonteserin.foro.persistence.model.Usuario;
import com.pablomonteserin.foro.persistence.repository.UsuarioRepository;

@Controller
public class UsuarioController {
	@Autowired
	private UsuarioRepository usuarioRepository;

	@RequestMapping(path = "/login", method = RequestMethod.GET)
	public ModelAndView Login(@ModelAttribute("usuario")Usuario usuario,ModelMap model) {
		model.addAttribute("nombre", usuario.getNombre());
		model.addAttribute("password", usuario.getPassword());	
		
		usuarioRepository.save(usuario);
		return new ModelAndView("menu");
	}
	
	@RequestMapping(path = "/", method = RequestMethod.GET)
	public ModelAndView Inicio(ModelMap model) {
		return new ModelAndView("index");
	}
}