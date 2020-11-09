<?php

/*
 * Ce fichier est la propriété de l8 (c) 2020
 */

namespace App\Http\Controllers;

use App\Http\Requests\Film as FilmRequest;
use App\Models\Category;
use App\Models\Film;

class FilmController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @param null|mixed $slug
   *
   * @return \Illuminate\Http\Response
   */
  public function index($slug = null)
  {
    $query = $slug ? Category::whereSlug($slug)->firstOrFail()->films() : Film::query();
    $films = $query->withTrashed()->oldest('title')->paginate(5);

    return view('index', compact('films', 'slug'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('create');
  }

  public function store(FilmRequest $filmRequest)
  {
    $film = Film::create($filmRequest->all());
    $film->categories()->attach($filmRequest->cats);

    return redirect()->route('films.index')->with('info', 'Le film a bien été créé');
  }

  /**
   * Display the specified resource.
   *
   * @param int $id
   *
   * @return \Illuminate\Http\Response
   */
  public function show(Film $film)
  {
    return view('show', compact('film'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param int $id
   *
   * @return \Illuminate\Http\Response
   */
  public function edit(Film $film)
  {
    return view('edit', compact('film'));
  }

  public function update(FilmRequest $filmRequest, Film $film)
  {
      $film->update($filmRequest->all());
      $film->categories()->sync($filmRequest->cats);
      return redirect()->route('films.index')->with('info', 'Le film a bien été modifié');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param int $id
   *
   * @return \Illuminate\Http\Response
   */
  public function destroy(Film $film)
  {
    $film->delete();

    return back()->with('info', 'Le film a bien été mis dans la corbeille.');
  }

  public function forceDestroy($id)
  {
    Film::withTrashed()->whereId($id)->firstOrFail()->forceDelete();

    return back()->with('info', 'Le film a bien été supprimé définitivement de la base de données.');
  }

  public function restore($id)
  {
    Film::withTrashed()->whereId($id)->firstOrFail()->restore();

    return back()->with('info', 'Le film a bien été restauré.');
  }
}
