<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\BooksModel;

class Locations extends ResourceController
{
    protected $booksModel;

    public function __construct()
    {
        $this->booksModel = new BooksModel();
    }

    public function index()
    {
        // Handle GET requests to fetch all locations
        $locations = $this->booksModel->getAllLocations();
        return $this->respond($locations);
    }
}