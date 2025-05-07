<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\BooksModel;

class BooksFromAuthor extends ResourceController
{
    protected $booksModel;

    public function __construct()
    {
        $this->booksModel = new BooksModel();
    }

    public function index()
    {
        $id_author = $this->request->getGet('id_author');

        // Handle GET requests to fetch all books from one author
        $books = $this->booksModel->getBooksFromAuthor($id_author);
        return $this->respond($books);
    }

}