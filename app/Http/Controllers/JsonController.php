<?php

/*
 * Ce fichier est la propriété de l8 (c) 2020
 *
 */

namespace App\Http\Controllers;

class JsonController extends Controller
{
  // https://alexwebdevelop.com/php-json-backend/?vgo_ee=2sX0yaOfsJW1NxQrAz%2B6ovlMy%2BOWWuyaZunZiCXh6gI%3D#json
  // Chap 6+
  public function show()
  {
    $array = [];

    $array['Name']  = 'Alex';
    $array['Age']   = 37;
    $array['Admin'] = true;

    $array['Contact'] = [
      'Site'    => 'alexwebdevelop.com',
      'Phone'   => 123456789,
      'Address' => null,
    ];

    $array['Tags'] = ['php', 'web', 'dev'];

    $json = json_encode($array, JSON_PRETTY_PRINT);


    $jsonData = json_decode($json);
    // $jsonData = json_decode($json, true);

    echo '<pre>';
    var_dump($jsonData);
    echo '</pre>';

    // foreach ($jsonData->Tags as $tag) {
    //   echo $tag.'<br>';
    // }

    //////////////////////////////////////////////

    // The PHP array.
    $arr = ['Product' => 'Coffee', 'Price' => 1.5];
    $arr = ['Coffee', 'Chocolate', 'Tea'];

    // The JSON string created from the array.
    // $json = 'The '.$arr['Product'].' cost $'.$arr['Price'];
    $json = json_encode($arr, JSON_PRETTY_PRINT | JSON_FORCE_OBJECT);

    echo '<pre>';
    // echo $json;
    echo '</pre>';

    $invalidChar = \chr(193);

    $array = ['Key 1' => 'A', 'Key 2' => 'B', 'Key 3' => $invalidChar];
    // $json = json_encode($array, JSON_PRETTY_PRINT | JSON_INVALID_UTF8_SUBSTITUTE);
    $json = json_encode($array, JSON_PRETTY_PRINT | JSON_INVALID_UTF8_IGNORE);

    if (false === $json) {
      echo 'Warning: json_encode() returned FALSE.';
    } else {
      echo '<pre>';
      echo $json;
      echo '</pre>';
    }

    return view('json')->withAjson($json);
  }

  public function send()
  {
    // Set the content-type.
    header('Content-Type: application/json');

    // The array with the data to return.
    $array = ['Coffee', 'Chocolate', 'Tea'];
    // $array = ['Product' => 'Coffee', 'Price' => 1.5];
    // The JSON string created from the array.
    $json = json_encode($array, JSON_PRETTY_PRINT | JSON_FORCE_OBJECT);

    // Return the JSON string.
    echo $json;

    $jsonData = json_decode($json);

    echo '<pre>';
    var_dump($jsonData);
    echo '</pre>';

    echo $jsonData->{1};

    $json = 'json';
    // return view('json')->withAjson($json);
  }
}
