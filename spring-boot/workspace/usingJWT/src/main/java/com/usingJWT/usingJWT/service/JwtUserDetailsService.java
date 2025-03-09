package com.usingJWT.usingJWT.service;

import java.util.ArrayList;

import org.springframework.security.core.userdetails.User;
import org.springframework.security.core.userdetails.UserDetails;
import org.springframework.security.core.userdetails.UserDetailsService;
import org.springframework.security.core.userdetails.UsernameNotFoundException;
import org.springframework.stereotype.Service;

@Service
public class JwtUserDetailsService implements UserDetailsService {
UserRepo
	@Override
	public UserDetails loadUserByUsername(String username) throws UsernameNotFoundException {

		if ("pmonteserin".equals(username)) {
			return new User("pmonteserin", "$2a$10$foGjPtlXyGjvb6rTh/R23e84hRiwZ0eepo1HVfMJ4Zug8y8jt0JJ6", // pmonteserin
					new ArrayList<>());
		} else {
			throw new UsernameNotFoundException("User not found with username: " + username);
		}
	}
}
