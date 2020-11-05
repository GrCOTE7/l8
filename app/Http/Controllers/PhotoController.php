<?php

/*
 * Ce fichier est la propriété de l8 (c) 2020
 */

namespace App\Http\Controllers;

use App\Http\Requests\ImagesRequest;

class PhotoController extends Controller
{
  public function create()
  {
    return view('photo');
  }

  public function store(ImagesRequest $request)
  {
    $request->image->store(config('images.path'), 'public');

    return view('photo_ok');
  }
}
