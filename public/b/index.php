<?php

/*
 * Ce fichier est la propriété de l8 (c) 2020
 *
 */

// Create the array with the comment data.
$comment = [];

$comment['snippet'] = [
  'parentId'     => 'YOUR_COMMENT_THREAD_ID',
  'textOriginal' => 'This is the original comment.',
];

// Encode it into a JSON string.
$json = json_encode($comment);

// The YouTube API URL.
$url = 'https://www.googleapis.com/youtube/v3/comments?part=snippet&key=AIzaSyDddZoE-2J6dkHpwJy4GT_4BsYDK2QD9go';

// The cURL session.
$curl = curl_init($url);

// Tell cURL to send a POST request.
curl_setopt($curl, CURLOPT_POST, true);

// Set the JSON object as the POST content.
curl_setopt($curl, CURLOPT_POSTFIELDS, $json);

// Set the JSON content-type: application/json.
curl_setopt($curl, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);

// Send the request.
$return = curl_exec($curl);

// Print the API response.
echo $return;
