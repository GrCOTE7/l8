<?php

/*
 * Ce fichier est la propriété de l8 (c) 2020
 */

namespace App\Http\Controllers;

class ArrController extends Controller
{
  public function show()
  {
    // declare colors array
    $colors = ['blue', 'red', 'blue', 'green', 'yellow', 'blue'];

    // get all keys for colors array
    $keys     = array_keys($colors);
    $blueKeys = array_keys($colors, 'blue', true);

    // get all values for colors array
    $values = array_values($colors);

    // debug
    // echo '<pre>';
    // print_r($keys);
    // print_r($values);
    // print_r($blueKeys);
    // echo '</pre>';

    // get first key of colors array
    $firstKey = array_key_first($colors);

    // get last key of colors array
    $lastKey = array_key_last($colors);

    $keys = [
      'array_keys()', $keys,
      'colors', $values,
      'array_keys($colors, \'blue\', true)', $blueKeys,
      'Firstkey()', $firstKey,
      'LastKay', $lastKey,
    ];
    // $keys = [1, 2, 3];

    return view('arr')->withKeys($keys);
  }
}
