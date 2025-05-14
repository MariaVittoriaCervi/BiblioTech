<?php

namespace App\Controllers;

use App\Models\BooksModel;
use CodeIgniter\Controller;

class OneBook extends Controller
{
    protected $booksModel;

    public function __construct()
    {
        $this->booksModel = new BooksModel();
    }

    public function index()
    {
        // Recupera l'ID del libro dai parametri GET
        $id_book = $this->request->getGet('id_book');

        // Ottieni i dati del libro specifico
        $book = $this->booksModel->getOneBook($id_book);

        // Passa i dati del libro alla view
        $data = ['book' => $book];

        return view('book', $data);
    }
}