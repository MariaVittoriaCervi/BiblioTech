<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Route per la homepage
$routes->get('/', 'views::index');

// Route per Locations
$routes->get('/locations', 'Views::locations'); // Mostra pagina di tutte le locations
$routes->get('/locations/all', 'Locations::index'); // Mostra tutte le locations
$routes->get('/location/(:num)', 'Views::oneLocation/$1'); // Mostra pagina di una location specifica
$routes->get('/location/(:num)/details', 'OneLocation::index/$1'); // Dettagli di una location
$routes->get('/location/(:num)/books', 'BooksInLocation::index/$1'); // Libri in una location

// Route per Books
$routes->get('/books', 'Views::books'); // Mostra pagina di tutti i libri
$routes->get('/books/all', 'Books::index'); // Mostra tutti i libri
$routes->get('/book/(:num)', 'Views::oneBook/$1'); // Mostra pagina di un libro specifico
$routes->get('/book/(:num)/details', 'OneBook::index/$1'); // Dettagli di un libro

// Route per Authors
$routes->get('/authors/all', 'Authors::index'); // Mostra tutti gli autori
$routes->get('/authors', 'Views::authors'); // Mostra pagina di tutti gli autori
$routes->get('/author/(:num)', 'Views::oneAuthor/$1'); // Mostra pagina di un autore specifico
$routes->get('/author/(:num)/details', 'OneAuthor::index/$1'); // Dettagli di un autore
$routes->get('/borrows/comingFrom/(:any)/(:num)', 'OneAuthor::index/$1/$2'); // Dettagli di un autore
$routes->get('/author/(:num)/books', 'BooksFromAuthor::index/$1'); // Libri di un autore

/*<script src="<?= base_url('js/fetch.js') ?>"></script>*/