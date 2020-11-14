<?php

/*
 * Ce fichier est la propriété de l8 (c) 2020
 */

$uri = urldecode(
  parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

//2do Tuto API REST https://openclassrooms.com/fr/courses/6573181-adoptez-les-api-rest-pour-vos-projets-web

// This file allows us to emulate Apache's "mod_rewrite" functionality from the
// built-in PHP web server. This provides a convenient way to test a Laravel
// application without having installed a "real" web server software here.
if ('/' !== $uri && file_exists(__DIR__.'/public'.$uri)) {
  return false;
}

require_once __DIR__.'/public/index.php';
