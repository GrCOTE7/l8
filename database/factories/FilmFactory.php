<?php

/*
 * Ce fichier est la propriété de l8 (c) 2020
 */

namespace Database\Factories;

use App\Models\Film;
use Illuminate\Database\Eloquent\Factories\Factory;

class FilmFactory extends Factory
{
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = Film::class;

  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    return [
      'title'       => $this->faker->sentence(2, true),
      'year'        => $this->faker->year,
      'description' => $this->faker->paragraph(),
    ];
  }
}
