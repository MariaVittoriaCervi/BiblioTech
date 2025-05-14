<?php

namespace App\Controllers;

use App\Models\BooksModel;
use CodeIgniter\Controller;

class OneLocation extends Controller
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

        // Ottieni i dati della location specifica
        $location = $this->booksModel->getOneLocation($id_location);

        // Passa i dati della location alla view
        $data = ['location' => $location];

        return view('location', $data);
    }
}