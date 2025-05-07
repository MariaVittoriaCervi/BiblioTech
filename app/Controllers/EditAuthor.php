<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\BooksModel;

class EditAuthor extends ResourceController
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

        $id_author = $data['id_author'];

        // Aggiorna il libro con i nuovi dati
        $updated = $this->booksModel->update($id_author, $data);
    }
}