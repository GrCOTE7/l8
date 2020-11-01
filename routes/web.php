<?php

/*
 * Ce fichier est la propriété de l8 (c) 2020
 *
 */

use App\Http\Controllers\WelcomeController;
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

use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'index'])->name('home');

Route::get('{n}', function ($n) {
  return 'Je suis la page '.$n.' !';
})->where('n', '[1-3]');

Route::get('test', function () {
  return response('un test', 200)->header('Content-Type', 'text/plain');
});

Route::get('article/{n}', function ($n) {
  return view('article')->with('numero', $n);
})->where('n', '[0-9]+');

Route::get('facture/{n}', function ($n) {
  return view('facture')->with('numero', $n);
})->where('n', '[0-9]+');
