<?php

/*
 * Ce fichier est la propriété de l8 (c) 2020
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  use HasFactory;

  public function films()
  {
    return $this->belongsToMany(Film::class);
  }
}
