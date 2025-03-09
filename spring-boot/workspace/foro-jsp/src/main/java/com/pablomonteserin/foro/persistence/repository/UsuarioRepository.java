package com.pablomonteserin.foro.persistence.repository;

import org.springframework.data.repository.CrudRepository;

import com.pablomonteserin.foro.persistence.model.Usuario;


public interface UsuarioRepository extends CrudRepository<Usuario, Integer> {

}
