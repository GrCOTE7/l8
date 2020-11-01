<?php

/*
 * Ce fichier est la propriété de l8 (c) 2020
 *
 */

use App\Http\Controllers\ArticleController;
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

use App\Http\Controllers\ContactController;

Route::get('/', [WelcomeController::class, 'index'])->name('home');

Route::get('{n}', function ($n) {
  return 'Je suis la page '.$n.' !';
})->where('n', '[1-3]');

use App\Http\Controllers\UserController;

Route::get('article/{n}', [ArticleController::class, 'show'])->where('n', '[0-9]+');

Route::get('facture/{n}', function ($n) {
  return view('facture')->with('numero', $n);
})->where('n', '[0-9]+');

use App\Http\Controllers\WelcomeController;

Route::get('user', [UserController::class, 'create']);
Route::post('user', [UserController::class, 'store']);

use Illuminate\Support\Facades\Route;

Route::get('contact', [ContactController::class, 'create']);
Route::post('contact', [ContactController::class, 'store']);
