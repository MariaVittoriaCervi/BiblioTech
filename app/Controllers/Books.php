<?php
<?php

namespace App\Controllers;

use App\Models\BooksModel;
use CodeIgniter\Controller;

class Books extends Controller
{
    protected $booksModel;

    public function __construct()
    {
        $this->booksModel = new BooksModel();
    }

    public function index()
    {
        // Fetch all books from the model
        $books = $this->booksModel->getAllBooks();

        // Pass the books data to the view
        $data = ['books' => $books];

        return view('books', $data);
    }
}