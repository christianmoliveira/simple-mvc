<?php

namespace app\classes;

class Routes
{
  public static function load($routes, $uri)
  {
    if ($uri[0] === '') {
      return "../app/controllers/home.php";
    }

    if (!array_key_exists($uri[0], $routes)) {
      header("Location: http://localhost:3000/404");
    }

    if (is_array($routes[$uri[0]]) && count($routes[$uri[0]]) > 1) {
      $route = $uri[0];
      $subroute = $uri[1] ?? 'index';

      if (array_key_exists($subroute, $routes[$route])) {
        return "../app/{$routes[$route][$subroute]}";
      }

      return "../app/controllers/home.php";
    }

    return "../app/{$routes[$uri[0]]}";
  }
}
