<?php

/*
 * Ce fichier est la propriété de l8 (c) 2020
 */

namespace App\View\Components;

use Illuminate\View\Component;

class Notification extends Component
{
  public $text;

  public function __construct($text)
  {
    $this->text = $text;
  }

  public function render()
  {
    return view('components.notification');
  }
}
