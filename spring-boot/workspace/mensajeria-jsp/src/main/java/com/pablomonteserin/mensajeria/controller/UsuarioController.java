package com.pablomonteserin.mensajeria.controller;

import java.text.SimpleDateFormat;
import java.util.ArrayList;
import java.util.List;

import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpSession;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.ModelMap;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.servlet.ModelAndView;

import com.pablomonteserin.mensajeria.persistence.model.Usuario;
import com.pablomonteserin.mensajeria.persistence.repository.UsuarioRepository;

@Controller
public class UsuarioController {
	private SimpleDateFormat simpleDateFormat = new SimpleDateFormat("yyyy-mm-dd");

	@Autowired
	private UsuarioRepository usuarioRepository;

	@RequestMapping(path = "/login", method = RequestMethod.GET)
	public ModelAndView login(@ModelAttribute("Usuario")Usuario usuario,HttpServletRequest request, ModelMap model) {
		model.addAttribute("nombre", usuario.getNombre());
		model.addAttribute("password", usuario.getPassword());		
		Usuario u = usuarioRepository.findUsuario(usuario.getNombre(), usuario.getPassword());

		HttpSession session = request.getSession();
		session.setAttribute("idSession", u.getId());
		return new ModelAndView("menu");
	}
	
	@RequestMapping(path = "/", method = RequestMethod.GET)
	public ModelAndView inicio(ModelMap model) {
			return new ModelAndView("index");
	}
	
	@RequestMapping(path = "/escribirMensaje", method = RequestMethod.GET)
	public ModelAndView escribirMensaje(ModelMap model) {
		Iterable<Usuario> usuariosIterables = usuarioRepository.findAll();
		List<Usuario> usuarios = new ArrayList<>();
		usuariosIterables.forEach(usuarios::add);
		ModelAndView modelo = new ModelAndView("consulta");
		model.addAttribute("usuarios", usuarios);
		
		return new ModelAndView("escribir-mensaje");
	}

}