package com.pablomonteserin.listatareas.persistence.repository;

import java.util.List;

import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.CrudRepository;
import org.springframework.data.repository.query.Param;

import com.pablomonteserin.listatareas.persistence.model.Usuario;


public interface UsuarioRepository extends CrudRepository<Usuario, Integer> {

	@Query("SELECT u FROM Usuario u WHERE u.nombre=:nombre")
	Usuario findUsuario(@Param("nombre")String nombre);
	
    List<Usuario> findAll();

	
}
