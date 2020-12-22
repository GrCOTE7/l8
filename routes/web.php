<?php

/*
 * Ce fichier est la propriété de l8 (c) 2020
 */

use App\Http\Controllers\FilmController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  return 'coucou';
});

Route::resource('films', FilmController::class);
Route::delete('films/force/{id}', [FilmController::class, 'forceDestroy'])->name('films.force.destroy');
Route::put('films/restore/{id}', [FilmController::class, 'restore'])->name('films.restore');
Route::get('category/{slug}/films', [FilmController::class, 'index'])->name('films.category');
Route::get('actor/{slug}/films', [FilmController::class, 'index'])->name('films.actor');
