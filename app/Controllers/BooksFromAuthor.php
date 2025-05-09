<?php

namespace App\Controllers;

use App\Models\BooksModel;
use CodeIgniter\Controller;

class BooksFromAuthor extends Controller
{
    protected $booksModel;

    public function __construct()
    {
        $this->booksModel = new BooksModel();
    }

    public function index()
    {
        // Recupera l'ID dell'autore dai parametri GET
        $id_author = $this->request->getGet('id_author');

        // Ottieni tutti i libri dell'autore specifico
        $books = $this->booksModel->getBooksFromAuthor($id_author);

        // Passa i dati dei libri alla view
        $data = ['books' => $books];

        return view('books', $data);
    }
}