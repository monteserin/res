package com.pablomonteserin.jwt.service;

import java.util.ArrayList;

import org.springframework.security.core.userdetails.User;
import org.springframework.security.core.userdetails.UserDetails;
import org.springframework.security.core.userdetails.UserDetailsService;
import org.springframework.security.core.userdetails.UsernameNotFoundException;
import org.springframework.stereotype.Service;

@Service
public class JWTUserDetailsService implements UserDetailsService {

	@Override
	public UserDetails loadUserByUsername(String username) throws UsernameNotFoundException {
	// Recogeríamos únicamente el nombre del frontend, consultamos si dicho nombre existe en la base de datos (esto es lo que simula la siguiente línea del if). 	
		if ("pmonteserin".equals(username)) {
			// Si el usuario existe en la base de datos, enviaríamos un objeto de la clase User de SpringSecurity cargado con el nombre de usuario y la contraseña obtenida de la base de datos y una lista de roles para que Spring Security lo valide.  Si hay coincidencia, se montará en el JWTAuthenticationControllerun objeto de la clase Principal que tendrá el nombre del usuario logado. 	
			return new User("pmonteserin", "$2a$10$slYQmyNdGzTn7ZLBXBChFOC9f6kFjAqPhccnP6DxlWXx2lPk1C3G6", new ArrayList<>()); 
		} else {
			throw new UsernameNotFoundException("User not found with username: " + username);
		}
	}
}