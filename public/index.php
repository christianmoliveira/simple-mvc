<?php

require "../bootstrap.php";

use app\classes\Uri;
use app\classes\Routes;

$routes = [
  '/' => 'controllers/home.php',
  'sobre' => 'controllers/sobre.php',
  'contato' => 'controllers/contato.php',
  '404' => 'controllers/404.php',
  'user' => [
    'index' => 'controllers/user/index.php',
    'edit' => 'controllers/user/edit.php',
  ],
];

$uri = Uri::load();

require Routes::load($routes, $uri);