package com.usingJWT.usingJWT.config;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.context.annotation.Bean;
import org.springframework.context.annotation.Configuration;
import org.springframework.security.authentication.AuthenticationManager;
import org.springframework.security.config.annotation.authentication.builders.AuthenticationManagerBuilder;
import org.springframework.security.config.annotation.web.builders.HttpSecurity;
import org.springframework.security.config.annotation.web.configuration.EnableWebSecurity;
import org.springframework.security.config.http.SessionCreationPolicy;
import org.springframework.security.core.userdetails.UserDetailsService;
import org.springframework.security.crypto.bcrypt.BCryptPasswordEncoder;
import org.springframework.security.web.SecurityFilterChain;
import org.springframework.security.web.authentication.UsernamePasswordAuthenticationFilter;

@EnableWebSecurity
@Configuration
public class SecurityConfig {

	@Autowired
	public void configAuthentication(AuthenticationManagerBuilder auth, UserDetailsService userDetailsService,
			BCryptPasswordEncoder bCryptPasswordEncoder) throws Exception {

		auth.userDetailsService(userDetailsService).passwordEncoder(bCryptPasswordEncoder);
	}

	@Bean
	public AuthenticationManager authenticationManager(HttpSecurity http, BCryptPasswordEncoder bCryptPasswordEncoder,
			UserDetailsService userDetailsService) throws Exception {

		AuthenticationManagerBuilder authenticationManagerBuilder = http
				.getSharedObject(AuthenticationManagerBuilder.class);
		authenticationManagerBuilder.userDetailsService(userDetailsService).passwordEncoder(bCryptPasswordEncoder);

		return authenticationManagerBuilder.build();
	}

	@Bean
	public SecurityFilterChain filterChain(HttpSecurity http, JwtRequestFilter jwtRequestFilter,
			JwtAuthenticationEntryPoint jwtAuthenticationEntryPoint) throws Exception {
		http.authorizeHttpRequests(
				// Quitamos seguridad a la url de authenticate para que cualquiera pueda acceder
				(authorize) -> authorize.requestMatchers("/authenticate").permitAll().anyRequest().authenticated());
		// Indicamos que clase se va a encargar de manejar los errores de autentificación (JwtAuthenticationEntryPoint)
		http.exceptionHandling((authorize) -> authorize.authenticationEntryPoint(jwtAuthenticationEntryPoint));
		// Evitamos que SpringSecurity mantenga una sesión con el usuario logado. Lo que haremos en su lugar es una autentificación en cada petición mediante el uso de un token
		http.sessionManagement((authorize) -> authorize.sessionCreationPolicy(SessionCreationPolicy.STATELESS));

		http.csrf((authorize) -> authorize.disable());
		// Indicamos en que momento se ejecutará el filtro (antes de cada petición)
		http.addFilterBefore(jwtRequestFilter, UsernamePasswordAuthenticationFilter.class);

		return http.build();
	}

}