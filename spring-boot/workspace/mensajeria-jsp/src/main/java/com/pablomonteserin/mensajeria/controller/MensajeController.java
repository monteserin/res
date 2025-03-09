package com.pablomonteserin.mensajeria.controller;

import java.text.SimpleDateFormat;
import java.util.ArrayList;
import java.util.Arrays;
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

import com.pablomonteserin.mensajeria.persistence.model.Mensaje;
import com.pablomonteserin.mensajeria.persistence.model.Usuario;
import com.pablomonteserin.mensajeria.persistence.repository.MensajeRepository;

@Controller
public class MensajeController {
	private SimpleDateFormat simpleDateFormat = new SimpleDateFormat("yyyy-mm-dd");
	@Autowired
	private MensajeRepository mensajeRepository;

	@RequestMapping(path = "/createMensajes", method = RequestMethod.GET)
	public ModelAndView createMensaje(@ModelAttribute("mensaje")Mensaje mensaje,HttpServletRequest request,ModelMap model) {
		HttpSession session = request.getSession();
		int idUsuarioLogueado = (int) session.getAttribute("idSession");
		
		Arrays.stream(mensaje.getIds()).filter(id -> id!=null).forEach(id->{
			Mensaje m = new Mensaje();
			Usuario destinatario = new Usuario();
			destinatario.setId(id);
			m.setDestinatario(destinatario);
			Usuario remitente = new Usuario();
			remitente.setId(idUsuarioLogueado);
			m.setRemitente(remitente);
			m.setTexto(mensaje.getTexto());
			mensajeRepository.save(m);
		});		

		return new ModelAndView("menu");
	}

	@RequestMapping(path = "/consultaMensajes", method = RequestMethod.GET)
	public ModelAndView consultaPacientes(HttpServletRequest request,ModelMap model) {
		HttpSession session = request.getSession();
		int id = (int) session.getAttribute("idSession");
		Iterable<Mensaje> mensajesIterables = mensajeRepository.findMensajesFromIdRemitente(id);
		List<Mensaje> mensajes = new ArrayList<>();
		mensajesIterables.forEach(mensajes::add);

		ModelAndView modelo = new ModelAndView("ver-mensajes");
		model.addAttribute("mensajes", mensajes);
		return modelo;
	}
	
	
	
}