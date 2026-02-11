<?php
// Filename: curl_post_object.php

$url = 'https://api.restful-api.dev/objects';


$data = array(
    'title' => 'Sample Object',
    'body'  => 'This is the body of the object.',
    'userId' => 1
);


$ch = curl_init($url);


$payload = json_encode($data);


curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);


$result = curl_exec($ch);


if(curl_errno($ch)){
    echo 'Curl Error: ' . curl_error($ch);
} else {
    echo 'Response: ' . $result;
}


curl_close($ch);
?>
