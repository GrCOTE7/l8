<?php

/*
 * Ce fichier est la propriété de l8 (c) 2020
 */

use App\Events\Accueil;
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
use App\Http\Controllers\UController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  event(new Accueil());

  return view('welcome');
});

Route::get('u', ['UController', 'index']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
  return view('dashboard');
})->name('dashboard');
