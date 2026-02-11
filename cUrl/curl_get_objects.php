<?php
// Filename: curl_get_objects.php

$url = 'https://api.restful-api.dev/objects';


$ch = curl_init($url);


curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Accept: application/json'
]);


$response = curl_exec($ch);


if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
} else {
 
    $data = json_decode($response);
   
    if (!empty($data)) {
        echo "Successfully retrieved " . count($data) . " items.\n";
        echo "First item title: " . $data[0]->title . "\n";
    }
}


curl_close($ch);
?>
