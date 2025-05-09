<?php
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
        // Fetch all locations from the model
        $locations = $this->booksModel->getAllLocations();

        // Pass the locations data as an associative array
        $data = ['locations' => $locations];

        return view('index', $data);
    }
}