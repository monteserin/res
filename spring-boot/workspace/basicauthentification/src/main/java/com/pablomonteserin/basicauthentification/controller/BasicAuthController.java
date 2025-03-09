package com.pablomonteserin.basicauthentification.controller;

import java.security.Principal;
import java.util.ArrayList;
import java.util.Collection;
import java.util.List;

import org.springframework.security.core.Authentication;
import org.springframework.security.core.authority.SimpleGrantedAuthority;
import org.springframework.security.core.context.SecurityContextHolder;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RestController;

import com.pablomonteserin.basicauthentification.model.User;

@RestController
public class BasicAuthController {

	@PostMapping(path = "/login")
	public String basicauth(Principal principal) {
		return principal.getName();
	}
}