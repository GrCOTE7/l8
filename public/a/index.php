<?php

/*
 * Ce fichier est la propriété de l8 (c) 2020
 *
 */

header('Content-Type: application/json');

// The array with the data to return.
$array = ['Coffee', 'Chocolate', 'Tea'];

// The JSON string created from the array.
$json = json_encode($array);

// Return the JSON string.
echo $json;
