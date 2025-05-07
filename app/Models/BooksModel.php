<?php

namespace App\Models;

use CodeIgniter\Model;

class BooksModel extends Model {

    protected $db;

    public function __construct() {
        parent::__construct();
        $this->db = \Config\Database::connect(); // connetti al database
    }

    public function getAllBooks() {
        return $this->db->table('books')->get()->getResult();
    }

    public function getOneBook($id_book) {
        return $this->db->table('books')->where('id_book', $id_book)->get()->getRow();
    }

    public function getAllAuthors() {
        return $this->db->table('authors')->get()->getResult();
    }

    public function getOneAuthor($id_author) {
        return $this->db->table('authors')->where('id_author', $id_author)->get()->getRow();
    }

    public function getBooksFromAuthor($id_author) {
        return $this->db->table('books b')
            ->join('authors a', 'b.id_author = a.id_author')
            ->where('a.id_author', $id_author)
            ->get()
            ->getResult();
    }

    public function getAllLocations() {
        return $this->db->table('locations')->get()->getResult();
    }

    public function getOneLocation($id_location) {
        return $this->db->table('locations')->where('id_location', $id_location)->get()->getRow();
    }

    public function getBooksInLocation($id_location) {
        return $this->db->table('books b')
            ->join('is_stored s', 'b.id_book = s.id_book')
            ->join('locations l', 's.id_location = l.id_location')
            ->where('l.id_location', $id_location)
            ->get()
            ->getResult();
    }

    public function editBook($id_book, $data) {
        return $this->db->table('books')->where('id_book', $id_book)->update($data);
    }

    public function addBook($data) {
        return $this->db->table('books')->insert($data);
    }

    public function editAuthor($id_author, $data) {
        return $this->db->table('authors')->where('id_author', $id_author)->update($data);
    }

    public function addAuthor($data) {
        return $this->db->table('authors')->insert($data);
    }
}
