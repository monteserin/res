package com.pablomonteserin.foro.persistence.repository;

import java.util.List;

import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.CrudRepository;
import com.pablomonteserin.foro.persistence.model.Comentario;

public interface ComentarioRepository extends CrudRepository<Comentario, Integer> {
	@Query("SELECT c FROM Comentario c WHERE c.hilo.id=:id")
	List<Comentario> findComentarios(Integer id);
}
