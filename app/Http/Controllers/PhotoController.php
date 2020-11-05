<?php

/*
 * Ce fichier est la propriété de l8 (c) 2020
 */

namespace App\Http\Controllers;

use App\Http\Requests\ImagesRequest;
use App\Repositories\PhotosRepository;

class PhotoController extends Controller
{
  public function create()
  {
    return view('photo');
  }

  public function store(ImagesRequest $request, PhotosRepository $photosRepository)
  {
    $photosRepository->save($request->image);

    return view('photo_ok');
  }
}
