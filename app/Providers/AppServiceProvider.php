<?php

/*
 * Ce fichier est la propriété de l8 (c) 2020
 */

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
  /**
   * Register any application services.
   *
   * @return void
   */
  public function register()
  {
    $this->app->bind(
      'App\Repositories\PhotosRepositoryInterface',
      'App\Repositories\PhotosRepository'
    );
  }

  /**
   * Bootstrap any application services.
   *
   * @return void
   */
  public function boot()
  {
  }
}
