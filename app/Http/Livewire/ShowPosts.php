<?php

/*
 * Ce fichier est la propriété de l8 (c) 2020
 */

namespace App\Http\Livewire;

use Livewire\Component;

class ShowPosts extends Component
{
  public function render()
  {
    return view('livewire.show-posts')->layout('layouts.guest');
  }
}
