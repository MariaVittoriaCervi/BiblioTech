<?php

namespace App\Controllers;

use App\Models\BooksModel;
use CodeIgniter\Controller;

class OneAuthor extends Controller
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

        // Ottieni i dati dell'autore specifico
        $author = $this->booksModel->getOneAuthor($id_author);

        // Passa i dati dell'autore alla view
        $data = ['author' => $author];

        return view('author', $data);
    }
}