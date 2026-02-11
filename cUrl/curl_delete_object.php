<?php
// Filename: curl_delete_object.php

$id = 'ff808181932c12345678';
$url = "https://api.restful-api.dev/objects/$id";


$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");


$response = curl_exec($ch);
echo $response;
curl_close($ch);
?>
