package com.pablomonteserin.plantilla.controller;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;


@Controller
public class PersonaController {


	@GetMapping("/")
	public String darDeAlta() {
		return "index";
	}
}
