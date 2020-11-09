<?php

/*
 * Ce fichier est la propriété de l8 (c) 2020
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Film extends Model
{
  use HasFactory;
  use SoftDeletes;

  protected $fillable = ['title', 'year', 'description'];

  public function categories()
  {
    return $this->belongsToMany(Category::class);
  }
}
