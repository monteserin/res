package com.pablomonteserin.ListaInvitados.persistence.repository;

import java.util.List;

import org.springframework.data.repository.CrudRepository;

import com.pablomonteserin.ListaInvitados.persistence.model.Invitado;


public interface InvitadoRepository extends CrudRepository<Invitado, Integer> {
    List<Invitado> findAll();

}
