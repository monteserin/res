package com.pablomonteserin.prueba.persistence.repositories;

import com.pablomonteserin.prueba.persistence.entities.Book;
import org.springframework.data.jpa.repository.JpaRepository;

public interface BookRepository extends JpaRepository<Book, Long> {
    Book findBookById(Long id);
}
