<?php

/*
 * Ce fichier est la propriété de l8 (c) 2020
 */

namespace Database\Seeders;

use App\Models\Actor;
use App\Models\Category;
use App\Models\Film;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    User::factory()->count(5)->create();
    User::create([
      'name'               => 'GC7',
      'email'              => 'GrCOTE7@Gmail.com',
      'password'           => '$2y$10$EXfmg0BoUN64hbkHkGVM4.LFrm05BACAzLLPx0WzKFS68nTC.s.x2',
      'profile_photo_path' => 'profile-photos/AVcvYrq3bpnt0y9ZTvSzsYGaAKPZslZIDHRDCDoz.png',
    ]);

    Actor::factory()->count(10)->create();

    $categories = [
      'Comédie',
      'Drame',
      'Action',
      'Fantastique',
      'Horreur',
      'Animation',
      'Espionnage',
      'Guerre',
      'Policier',
      'Pornographique',
    ];

    foreach ($categories as $category) {
      Category::create(['name' => $category, 'slug' => Str::slug($category)]);
    }

    $ids = range(1, 10);
    Film::factory()->count(40)->create()->each(function ($film) use ($ids) {
      shuffle($ids);
      $film->categories()->attach(\array_slice($ids, 0, rand(1, 4)));
      shuffle($ids);
      $film->actors()->attach(\array_slice($ids, 0, rand(1, 4)));
    });
  }
}
