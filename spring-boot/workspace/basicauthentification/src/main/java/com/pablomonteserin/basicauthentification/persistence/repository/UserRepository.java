package com.pablomonteserin.basicauthentification.persistence.repository;

import org.springframework.data.repository.CrudRepository;

import com.pablomonteserin.basicauthentification.model.User;

public interface UserRepository extends CrudRepository<User, Integer> {

	User findByUserName(String username);

}