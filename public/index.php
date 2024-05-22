<?php
require '../helpers.php';
require basePath('Router.php');
require basePath('Database.php');

$config = require basePath('config/db.php');

// Instatiating the router
$router = new Router();

// GET Routes
$routes = require basePath('routes.php');

// Get current URI and HTTP method
$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

// Route the request
$router->route($uri, $method);
