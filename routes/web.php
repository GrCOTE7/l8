<?php

/*
 * Ce fichier est la propriété de l8 (c) 2020
 */

// use App\Http\Controllers\FilmController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArrController;

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
  return view('welcome');
})->name('welcome');

Route::get('arr1', [ArrController::class, 'show1'])->name('arr');
Route::get('arr2', [ArrController::class, 'show2'])->name('arr');

// Route::middleware('auth')->group(function () {
//     Route::get('/', function ()    {
//         // Réservé aux utilisateurs authentifiés
//     });
//     Route::get('comptes', function () {
//         // Réservé aux utilisateurs authentifiés
//     });
// });

// Route::resource('films', FilmController::class);
// Route::delete('films/force/{id}', [FilmController::class, 'forceDestroy'])->name('films.force.destroy');
// Route::put('films/restore/{id}', [FilmController::class, 'restore'])->name('films.restore');
// Route::get('category/{slug}/films', [FilmController::class, 'index'])->name('films.category');
// Route::get('actor/{slug}/films', [FilmController::class, 'index'])->name('films.actor');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
  return view('dashboard');
})->name('dashboard');
