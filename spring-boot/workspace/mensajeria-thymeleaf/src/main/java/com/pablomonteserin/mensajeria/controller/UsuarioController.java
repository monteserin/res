package com.pablomonteserin.mensajeria.controller;

import java.text.SimpleDateFormat;
import java.util.List;

import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpSession;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.ui.ModelMap;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.ModelAttribute;

import com.pablomonteserin.mensajeria.persistence.model.Usuario;
import com.pablomonteserin.mensajeria.persistence.repository.UsuarioRepository;

@Controller
public class UsuarioController {
	private SimpleDateFormat simpleDateFormat = new SimpleDateFormat("yyyy-mm-dd");

	@Autowired
	private UsuarioRepository usuarioRepository;

	@GetMapping("/login")
	public String login(@ModelAttribute("Usuario") Usuario usuario, HttpServletRequest request, ModelMap model) {
		model.addAttribute("nombre", usuario.getNombre());
		model.addAttribute("password", usuario.getPassword());
		Usuario u = usuarioRepository.findUsuario(usuario.getNombre(), usuario.getPassword());
		if (u == null) {
			return "forward:/index.html";
		} else {
			HttpSession session = request.getSession();
			session.setAttribute("idSession", u.getId());
		}
		return "forward:/menu.html";
	}

	@GetMapping("/escribir-mensaje")
	public String escribirMensaje(Model model) {
		List<Usuario> usuarios = usuarioRepository.findAll();
		model.addAttribute("usuarios", usuarios);
		return "escribir-mensaje";
	}

}