<?php
// Filename: curl_get_invalid_object.php

$url = 'https://api.restful-api.dev/objects/99999999';


$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);


$statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);


echo "HTTP Status Code: " . $statusCode . "\n";
echo "Response: " . $response;


curl_close($ch);
?>
