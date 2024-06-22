<?php
// GET
$router->get('/', 'HomeController@index');
$router->get('/listings', 'ListingController@index');
$router->get('/listings/create', 'ListingController@create');
$router->get('/listings/edit/{id}', 'ListingController@edit');
$router->get('/listings/{id}', 'ListingController@show');

// POST
$router->post('/listings', 'ListingController@store');

// PUT
$router->put('/listings/{id}', 'ListingController@update');

// DELETE
$router->delete('/listings/{id}', 'ListingController@destroy');
?>
