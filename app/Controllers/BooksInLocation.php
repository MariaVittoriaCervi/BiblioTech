<?php

namespace App\Controllers;

use App\Models\BooksModel;
use CodeIgniter\Controller;

class BooksInLocation extends Controller
{
    protected $booksModel;

    public function __construct()
    {
        $this->booksModel = new BooksModel();
    }

    public function index()
    {
        // Recupera l'ID della location dai parametri GET
        $id_location = $this->request->getGet('id_location');

        // Ottieni tutti i libri nella location specifica
        $books = $this->booksModel->getBooksInLocation($id_location);

        // Passa i dati dei libri alla view
        $data = ['books' => $books];

        return view('books', $data);
    }
}