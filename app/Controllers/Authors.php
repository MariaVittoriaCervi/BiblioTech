<?php
<?php

namespace App\Controllers;

use App\Models\BooksModel;
use CodeIgniter\Controller;

class Authors extends Controller
{
    protected $booksModel;

    public function __construct()
    {
        $this->booksModel = new BooksModel();
    }

    public function index()
    {
        // Fetch all authors from the model
        $authors = $this->booksModel->getAllAuthors();

        // Pass the authors data to the view
        $data = ['authors' => $authors];

        return view('authors', $data);
    }
}