<?php

namespace App\Models;

use CodeIgniter\Model;

class BooksModel extends Model
{
    protected $table = 'books'; // Nome della tabella nel database
    protected $primaryKey = 'id_book'; // Chiave primaria della tabella
    protected $allowedFields = ['title', 'original_language', 'genre', 'plot', 'comment', 'cover', 'id_author']; // Campi modificabili

    /**
     * Recupera tutti i libri
     */
    public function getAllBooks()
    {
        return $this->findAll(); // Recupera tutti i record dalla tabella
    }

    /**
     * Recupera un singolo libro in base all'ID
     */
    public function getOneBook($id_book)
    {
        return $this->find($id_book); // Recupera un singolo record in base alla chiave primaria
    }

    /**
     * Recupera tutti gli autori
     */
    public function getAllAuthors()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('authors');
        return $builder->get()->getResultArray(); // Recupera tutti i record dalla tabella authors
    }

    /**
     * Recupera un singolo autore in base all'ID
     */
    public function getOneAuthor($id_author)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('authors');
        return $builder->getWhere(['id_author' => $id_author])->getRowArray(); // Recupera un singolo autore
    }

    /**
     * Recupera tutti i libri di un autore
     */
    public function getBooksFromAuthor($id_author)
    {
        return $this->where('id_author', $id_author)->findAll(); // Recupera tutti i libri di un autore specifico
    }

    /**
     * Recupera tutte le location
     */
    public function getAllLocations()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('locations');
        return $builder->get()->getResultArray(); // Recupera tutte le location
    }

    /**
     * Recupera una singola location in base all'ID
     */
    public function getOneLocation($id_location)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('locations');
        return $builder->getWhere(['id_location' => $id_location])->getRowArray(); // Recupera una singola location
    }

    /**
     * Recupera tutti i libri in una location
     */
    public function getBooksInLocation($id_location)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('books');
        $builder->select('books.*');
        $builder->join('is_stored', 'books.id_book = is_stored.id_book');
        $builder->join('locations', 'is_stored.id_location = locations.id_location');
        $builder->where('locations.id_location', $id_location);
        return $builder->get()->getResultArray(); // Recupera tutti i libri in una location
    }

    /**
     * Modifica un libro
     */
    public function editBook($data, $id_book)
    {
        return $this->update($id_book, $data); // Aggiorna i dati di un libro
    }

    /**
     * Aggiunge un nuovo libro
     */
    public function addBook($data)
    {
        return $this->insert($data); // Inserisce un nuovo libro
    }

    /**
     * Modifica un autore
     */
    public function editAuthor($data, $id_author)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('authors');
        return $builder->update($data, ['id_author' => $id_author]); // Aggiorna i dati di un autore
    }

    /**
     * Aggiunge un nuovo autore
     */
    public function addAuthor($data)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('authors');
        return $builder->insert($data); // Inserisce un nuovo autore
    }
}