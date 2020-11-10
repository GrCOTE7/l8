<?php

use App\Http\Controllers\Api\FilmController;
use Illuminate\Support\Facades\Route;

/*
 * Ce fichier est la propriété de l8 (c) 2020
 */


Route::apiResource('films', FilmController::class);
