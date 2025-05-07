<?php

namespace App\Controllers;

use App\Models\BooksModel;
use CodeIgniter\Controller;

class Locations extends Controller
{
    protected $booksModel;

    public function __construct()
    {
        $this->booksModel = new BooksModel();
    }

    public function index()
    {
        $locations = $this->booksModel->getAllLocations();

        // Se vuoi restituire JSON (API)
        return $this->response->setJSON($locations);
    }
}
