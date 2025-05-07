<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\BooksModel;

class OneBook extends ResourceController
{
    protected $booksModel;

    public function __construct()
    {
        $this->booksModel = new BooksModel();
    }

    public function index()
    {
        $id_book = $this->request->getGet('id_book');

        // Handle GET requests to fetch one book
        $book = $this->booksModel->getOneBook($id_book);
        return $this->respond($book);
    }

}