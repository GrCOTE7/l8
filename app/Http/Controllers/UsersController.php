<?php

/*
 * Ce fichier est la propriété de l8 (c) 2020
 *
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
  public function create()
  {
    return view('infos');
  }

  public function store(Request $request)
  {
    return 'Le nom est '.$request->input('nom');
  }
}
