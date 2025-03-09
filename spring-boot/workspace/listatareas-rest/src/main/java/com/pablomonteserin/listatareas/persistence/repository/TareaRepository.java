package com.pablomonteserin.listatareas.persistence.repository;

import java.util.List;

import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.CrudRepository;
import org.springframework.data.repository.query.Param;
import org.springframework.stereotype.Repository;

import com.pablomonteserin.listatareas.persistence.model.Tarea;
import com.pablomonteserin.listatareas.persistence.model.Usuario;

@Repository
public interface TareaRepository extends CrudRepository<Tarea, Integer> {
    List<Tarea> findAll();
	List<Tarea> findByUsuario(Usuario usuario);

	@Query("SELECT t FROM Tarea t WHERE t.usuario = :usuario")
	List<Tarea> findByUsuarioWithProperties(@Param("usuario") Usuario usuario);
}
