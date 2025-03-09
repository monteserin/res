package com.usingJWT.usingJWT.dto;

import java.io.Serializable;
import lombok.Getter;
import lombok.RequiredArgsConstructor;
import lombok.Setter;
@Getter 
public class JWTResponse implements Serializable {

	private static final long serialVersionUID = -8091879091924046844L;
	private final String token;

	public JWTResponse(String jwttoken) {
		this.token = jwttoken;
	}
	
}