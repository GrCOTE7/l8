<?php

/*
 * Ce fichier est la propriété de l8 (c) 2020
 */

namespace App\Http\Controllers;

class ArrController extends Controller
{
  public function show1()
  {
    // declare colors array
    $colors = ['blue', 'red', 'blue', 'green', 'yellow', 'blue'];

    // get all keys for colors array
    $keys     = array_keys($colors);
    $blueKeys = array_keys($colors, 'blue', true);

    // get all values for colors array
    $values = array_values($colors);

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

  public function show2()
  {
    // declare colors array
    $colors = ['blue', 'red', 'blue', 'green', 'yellow', 'blue'];

    // find number of times value appeared in an array
    $result = array_count_values($colors);

    // count total elements in array
    $total = \count($colors);

    // define multi-dimensional array
    $multiArr = [
      ['a' => 1, 'b' => 2, 'c' => 2],
      ['a' => 4, 'b' => 5, 'c' => 4],
      ['a' => 7, 'b' => 8, 'c' => 3],
    ];

    $keyToSort = 'c';
    usort($multiArr, function ($a, $b) use ($keyToSort) {
      return $a[$keyToSort] <=> $b[$keyToSort];
    });

    $keys = [
      'colors', $colors,
      'array_count_values($colors)', $result,
      'count()', $total,
      'multiArr', $multiArr,
    ];
    // $keys = [1, 2, 3];
    return view('arr')->withKeys($keys);
  }
}
