package com.pablomonteserin.mensajeria.persistence.repository;

import java.util.List;

import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.CrudRepository;
import org.springframework.data.repository.query.Param;

import com.pablomonteserin.mensajeria.persistence.model.Mensaje;


public interface MensajeRepository extends CrudRepository<Mensaje, Integer> {
    List<Mensaje> findAll();
    
    @Query("SELECT m FROM Mensaje m WHERE m.destinatario.id=:id")
	List<Mensaje> findMensajesFromIdRemitente(@Param("id")int id);
}
