<?php

/*
 * Ce fichier est la propriété de l8 (c) 2020
 *
 */

namespace App\Http\Controllers;

class WelcomeController extends Controller
{
  public function index()
  {
    return view('welcome');
  }
}
