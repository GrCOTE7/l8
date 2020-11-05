<?php

/*
 * Ce fichier est la propriété de l8 (c) 2020
 */

namespace App\Repositories;

use Illuminate\Http\UploadedFile;

interface PhotosRepositoryInterface
{
  public function save(UploadedFile $image);
}
