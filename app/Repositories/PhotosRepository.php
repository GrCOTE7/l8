<?php

/*
 * Ce fichier est la propriété de l8 (c) 2020
 */

namespace App\Repositories;

use Illuminate\Http\UploadedFile;

class PhotosRepository
{
  public function save(UploadedFile $image)
  {
    $image->store(config('images.path'), 'public');
  }
}
