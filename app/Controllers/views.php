<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Views extends ResourceController
{
    public function index()
    {
        return view('index');
    }

    public function books()
    {
        return view('books'); 
    }

    public function authors()
    {
        return view('authors'); 
    }

    public function oneBook($id)
    {
        return view('book', ['id' => $id]); // Assicurati che esista un file book.php in app/Views
    }

    public function oneAuthor($id)
    {
        return view('author', ['id' => $id]); // Assicurati che esista un file author.php in app/Views
    }

    public function locations()
    {
        return view('locations'); // Assicurati che esista un file locations.php in app/Views
    }

    public function oneLocation($id)
    {
        return view('location', ['id' => $id]); // Assicurati che esista un file location.php in app/Views
    }
}