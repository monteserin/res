package com.pablomonteserin.mensajeria.controller;

import java.text.SimpleDateFormat;
import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;

import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpSession;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.ui.ModelMap;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.servlet.ModelAndView;

import com.pablomonteserin.mensajeria.persistence.model.Mensaje;
import com.pablomonteserin.mensajeria.persistence.model.Usuario;
import com.pablomonteserin.mensajeria.persistence.repository.MensajeRepository;

@Controller
public class MensajeriaController {
	private SimpleDateFormat simpleDateFormat = new SimpleDateFormat("yyyy-mm-dd");
	@Autowired
	private MensajeRepository mensajeRepository;

	@RequestMapping("/create-mensajes")
	public String createMensaje(@RequestParam("mensajesIds[]") String[] mensajesIds, @RequestParam("txt") String txt, HttpServletRequest request,
			Model model) {
		HttpSession session = request.getSession();
		int idUsuarioLogueado = (int) session.getAttribute("idSession");

		Arrays.stream(mensajesIds).forEach(id -> {
			Mensaje m = new Mensaje();
			Usuario destinatario = new Usuario();
			destinatario.setId(Integer.parseInt(id));
			m.setDestinatario(destinatario);
			Usuario remitente = new Usuario();
			remitente.setId(idUsuarioLogueado);
			m.setRemitente(remitente);
			m.setTexto(txt);
			mensajeRepository.save(m);
		});
		return "forward:/menu.html";
	}

	@RequestMapping("/consulta-mensajes")
	public String consultaPacientes(HttpServletRequest request, Model model) {
		HttpSession session = request.getSession();
		int id = (int) session.getAttribute("idSession");
		List<Mensaje> mensajes = mensajeRepository.findMensajesFromIdRemitente(id);
		model.addAttribute("mensajes", mensajes);
		return "ver-mensajes";
	}

}