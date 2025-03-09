package com.pablomonteserin.prueba.controllers;

import com.pablomonteserin.prueba.persistence.entities.Book;
import com.pablomonteserin.prueba.persistence.repositories.BookRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.*;

import java.util.List;

@RestController
@CrossOrigin
@RequestMapping("/books")
public class BookController {
    @Autowired
    BookRepository bookRepository;

    @GetMapping
    List<Book> getBooks() {

        List<Book> books = bookRepository.findAll();
        return books;

    }

    @PostMapping
    void createBook(@RequestBody Book book) {
        bookRepository.save(book);
    }

    @DeleteMapping("/{id}")
    void deleteBook(@PathVariable Long id) {
        Book b = bookRepository.findBookById(id);
        bookRepository.delete(b);
    }

    @PutMapping
    void updateBook(@RequestBody Book book) {
        bookRepository.save(book);
    }
}
