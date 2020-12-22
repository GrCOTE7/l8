<?php

/*
 * Ce fichier est la propriété de l8 (c) 2020
 */

namespace App\Http\Controllers;

use App\Services\Livre;

class WelcomeController extends Controller
{
  public function __construct()
  {
    $this->middleware('guest');
  }

  public function index(Livre $livre)
  {
    $titre = $livre->getTitle();

    return view('welcome', compact('titre'));
  }
}
