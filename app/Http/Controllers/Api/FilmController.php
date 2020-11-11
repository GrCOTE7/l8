<?php

/*
 * Ce fichier est la propriété de l8 (c) 2020
 */

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Film;
use Illuminate\Http\Request;
use App\Http\Resources\Film as FilmResource;

class FilmController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return Film::where('year', '>', 1999)->orderBy('year')->orderBy('title')->paginate(3);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    Film::create($request->all());
  }

  /**
   * Display the specified resource.
   *
   * @param \App\Film $film
   *
   * @return \Illuminate\Http\Response
   */
  public function show(Film $film)
  {
    return new FilmResource($film);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param \App\Film $film
   *
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Film $film)
  {
    $film->update($request->all());
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param \App\Film $film
   *
   * @return \Illuminate\Http\Response
   */
  public function destroy(Film $film)
  {
    $film->delete();
  }
}
