<?php

/*
 * Ce fichier est la propriété de l8 (c) 2020
 */

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Film;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    \App\Models\User::factory(10)->create();

    Category::factory()
      ->has(Film::factory()->count(4))
      ->count(10)
      ->create();
    // Film::factory(10)->create();
  }
}
