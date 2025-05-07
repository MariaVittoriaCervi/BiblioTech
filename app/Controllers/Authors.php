<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\BooksModel;

class Authors extends ResourceController
{
    protected $booksModel;

    public function __construct()
    {
        $this->booksModel = new BooksModel();
    }

    public function index()
    {
        // Handle GET requests to fetch all authors
        $authors = $this->booksModel->getAllAuthors();
        return $this->respond($authors);
    }
}