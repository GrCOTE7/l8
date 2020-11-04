<?php

/*
 * Ce fichier est la propriété de l8 (c) 2020
 *
 */

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\JsonController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/', [WelcomeController::class, 'index'])->name('home');

Route::get('{n}', function ($n) {
  return 'Je suis la page '.$n.' !';
})->where('n', '[1-3]');

Route::get('article/{n}', [ArticleController::class, 'show'])->where('n', '[0-9]+');

Route::get('facture/{n}', function ($n) {
  return view('facture')->with('numero', $n);
})->where('n', '[0-9]+');

Route::get('user', [UserController::class, 'create']);
Route::post('user', [UserController::class, 'store']);

Route::get('contact', [ContactController::class, 'create']);
Route::post('contact', [ContactController::class, 'store']);

Route::get('show', [JsonController::class, 'show']);
Route::get('send', [JsonController::class, 'send']);

Route::get('/test-contact', function () {
  return new App\Mail\Contact([
    'nom'     => 'Durand',
    'email'   => 'durand@chezlui.com',
    'message' => 'Je voulais vous dire que votre site est magnifique !',
  ]);
});
