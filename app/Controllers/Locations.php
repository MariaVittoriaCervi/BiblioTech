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

        $data = json_encode($locations)

        return view('index', $data);
    }
}
