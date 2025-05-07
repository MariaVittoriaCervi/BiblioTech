<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\BooksModel;

class Books extends ResourceController
{
    protected $booksModel;

    public function __construct()
    {
        $this->booksModel = new BooksModel();
    }

    public function index()
    {
        // Handle GET requests to fetch all books
        $books = $this->booksModel->getAllBooks();
        return $this->respond($books);
    }
}