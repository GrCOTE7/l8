<?php

/*
 * Ce fichier est la propriété de l8 (c) 2020
 */

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class Film extends JsonResource
{
  /**
   * Transform the resource into an array.
   *
   * @param \Illuminate\Http\Request $request
   *
   * @return array
   */
  public function toArray($request)
  {
    return [
      'title'       => $this->name,
      'year'        => $this->year,
      'description' => Str::words($this->description, 10),
      'categories'  => $this->categories,
      'actors'      => $this->actors,
    ];
  }
}
