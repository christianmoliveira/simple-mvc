<?php

namespace app\classes;

class Uri
{
  public static function load()
  {
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    if ($uri !== null) {
      return explode('/', substr($uri, 1));
    }

    return '';
  }
}
