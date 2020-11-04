<?php

/*
 * Ce fichier est la propriété de l8 (c) 2020
 *
 */

namespace App\Http\Controllers;

use Storage;

class TestController extends Controller
{
  public function show()
  {
    Storage::disk('public')->put('recettes.txt', 'Contenu du fichier');

    return 'ok';
  }
}
