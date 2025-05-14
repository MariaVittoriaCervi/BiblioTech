<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Route per la homepage (pagina mostrata automaticamente)
$routes->get('/', 'Locations::index'); // Mostra la lista di tutte le locations come homepage

// Route per Locations
$routes->get('/locations', 'Locations::index'); // Mostra tutte le locations
$routes->get('/location/(:num)', 'OneLocation::index/$1'); // Dettagli di una location
$routes->get('/location/(:num)/books', 'BooksInLocation::index/$1'); // Libri in una location

// Route per Books
$routes->get('/books', 'Books::index'); // Mostra tutti i libri
$routes->get('/book/(:num)', 'OneBook::index/$1'); // Dettagli di un libro

// Route per Authors
$routes->get('/authors', 'Authors::index'); // Mostra tutti gli autori
$routes->get('/author/(:num)', 'OneAuthor::index/$1'); // Dettagli di un autore
$routes->get('/author/(:num)/books', 'BooksFromAuthor::index/$1'); // Libri di un autore