<?php

/*
 * Ce fichier est la propriété de l8 (c) 2020
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;

class UController extends Controller
{
  public function index()
  {
      $theLocale =App::getLocale();

    return view('u')->withTheLocale($theLocale);
  }
}
