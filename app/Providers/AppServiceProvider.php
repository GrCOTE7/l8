<?php

/*
 * Ce fichier est la propriété de l8 (c) 2020
 */

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\Facades\View;
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
    View::composer(['index', 'create'], function ($view) {
      $view->with('categories', Category::all());
    });
  }
}
