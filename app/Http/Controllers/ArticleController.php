<?php

/*
 * Ce fichier est la propriété de l8 (c) 2020
 *
 */

namespace App\Http\Controllers;

class ArticleController extends Controller
{
  public function show($n)
  {
    return view('article')->withNumero($n);
  }
}
