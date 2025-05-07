<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\BooksModel;

class Views extends ResourceController
{
    protected $booksModel;

    public function __construct(){}

    public function index()
    {
       return view('index');
    }

}