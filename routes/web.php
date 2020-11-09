<?php

/*
 * Ce fichier est la propriété de l8 (c) 2020
 */

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\JsonController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\TestController;
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


Route::get('contact', [ContactsController::class, 'create'])->name('contact.create');
Route::post('contact', [ContactsController::class, 'store'])->name('contact.store');

Route::get('show', [JsonController::class, 'show']);
Route::get('send', [JsonController::class, 'send']);

Route::get('test-contact', function () {
  return new App\Mail\Contact([
    'nom'     => 'Durand',
    'email'   => 'durand@chezlui.com',
    'message' => 'Je voulais vous dire que votre site est magnifique !',
  ]);
});

Route::get('test', [TestController::class, 'show']);

Route::get('photo', [PhotoController::class, 'create']);
Route::post('photo', [PhotoController::class, 'store']);

Route::resource('films', FilmController::class);
Route::delete('films/force/{id}', [FilmController::class, 'forceDestroy'])->name('films.force.destroy');
Route::put('films/restore/{id}', [FilmController::class, 'restore'])->name('films.restore');
Route::get('category/{slug}/films', [FilmController::class, 'index'])->name('films.category');
