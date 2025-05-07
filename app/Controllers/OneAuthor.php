<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\BooksModel;

class OneAuthor extends ResourceController
{
    protected $booksModel;

    public function __construct()
    {
        $this->booksModel = new BooksModel();
    }

    public function index()
    {
        $id_author = $this->request->getGet('id_author');

        // Handle GET requests to fetch one author
        $author = $this->booksModel->getOneAuthor($id_author);
        return $this->respond($author);
    }

}