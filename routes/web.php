<?php

/*
 * Ce fichier est la propriété de l8 (c) 2020
 */

Route::middleware('web')->group(function () {
  Route::get('/demo', static function () {
    return view('laravel-uikit::demo');
  })->name('demo');
});

Route::middleware('auth')->group(function () {
  Route::prefix('profile')->group(function () {
    Route::view('updatepassword', 'profile.updatepassword')->name('profile.updatepassword');
  });
});
