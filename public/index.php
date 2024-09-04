<?php

/**
 * @author juanvladimir13 <juanvladimir13@gmail.com>
 * @see https://github.com/juanvladimir13
 */

require '../vendor/autoload.php';

use Bramus\Router\Router;

if (array_key_exists('email', $_SESSION)) {
    $router = new Router();

    $router->get('/categoria/(\d+)',
        '\Inventario\Http\Controllers\CCategoria@find');

    $router->post('/logout', function () {

    });

    $router->set404(function () {
        echo '404';
        exit();
    });
    $router->run();
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // show login
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // proccess login
}
