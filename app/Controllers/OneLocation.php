<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\BooksModel;

class OneLocation extends ResourceController
{
    protected $booksModel;

    public function __construct()
    {
        $this->booksModel = new BooksModel();
    }

    public function index()
    {
        $id_location = $this->request->getGet('id_location');

        // Handle GET requests to fetch one location
        $location = $this->booksModel->getOneLocation($id_location);
        return $this->respond($location);
    }

}