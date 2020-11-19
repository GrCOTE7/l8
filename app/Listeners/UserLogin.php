<?php

/*
 * Ce fichier est la propriété de l8 (c) 2020
 */

namespace App\Listeners;

class UserLogin
{
  /**
   * Create the event listener.
   *
   * @return void
   */
  public function __construct()
  {
  }

  /**
   * Handle the event.
   *
   * @param object $event
   *
   * @return void
   */
  public function handle($event)
  {
    // dd($event);
    dd($event->user->name." s'est connecté.");
  }
}
