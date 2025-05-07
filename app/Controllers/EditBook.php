<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\BooksModel;

class EditBook extends ResourceController
{
    protected $booksModel;

    public function __construct()
    {
        $this->booksModel = new BooksModel();
    }

    public function update()
    {
        // Recupera i dati inviati nella richiesta PUT
        $data = $this->request->getRawInput();

        $id_book = $data['id_book'];

        // Aggiorna il libro con i nuovi dati
        $updated = $this->booksModel->update($id_book, $data);
    }
}