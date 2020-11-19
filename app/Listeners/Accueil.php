<?php

/*
 * Ce fichier est la propriété de l8 (c) 2020
 */

namespace App\Listeners;

use App\Events\Accueil as AcceuilEvent;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class Accueil
{
  public function __construct()
  {
  }

  public function handle(AcceuilEvent $event)
  {
    DB::table('visits')->insert([
      'ip'         => request()->ip(),
      'created_at' => Carbon::now(),
    ]);
  }
}
