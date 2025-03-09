package com.pablomonteserin.jwt.controller;

import java.security.Principal;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.ResponseEntity;
//import org.springframework.security.authentication.AuthenticationManager;
import org.springframework.security.core.userdetails.UserDetails;
import org.springframework.web.bind.annotation.CrossOrigin;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RestController;

import com.pablomonteserin.jwt.dto.JWTResponse;
import com.pablomonteserin.jwt.service.JWTUserDetailsService;
import com.pablomonteserin.jwt.utils.JWTTokenUtil;

@RestController
@CrossOrigin
public class JWTAuthenticationController {

//	@Autowired
//	private AuthenticationManager authenticationManager;

	@Autowired
	private JWTTokenUtil jwtTokenUtil;

	@Autowired
	private JWTUserDetailsService userDetailsService;

	
	@RequestMapping(value = "/authenticate", method = RequestMethod.POST)
	public ResponseEntity<?> createAuthenticationToken(Principal principal) throws Exception {
		final UserDetails userDetails = userDetailsService.loadUserByUsername(principal.getName());
		final String token = jwtTokenUtil.generateToken(userDetails);
		return ResponseEntity.ok(new JWTResponse(token)); // Debemos devolver el token al cliente para que en las siguientes peticiones este lo envíe en la cabecera de cada petición
	}

}