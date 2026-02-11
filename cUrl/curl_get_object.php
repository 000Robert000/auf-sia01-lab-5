<?php
// Filename: curl_get_object.php


$url = 'https://api.restful-api.dev/objects/1';


$ch = curl_init($url);


curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);


$response = curl_exec($ch);


if (curl_errno($ch)) {
    echo 'cURL Error: ' . curl_error($ch);
} else {
    echo $response;
}


curl_close($ch);
?>
