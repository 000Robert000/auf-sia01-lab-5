<?php
// Filename: curl_put_object.php


$id = 'ff808181932c12345678';
$url = "https://api.restful-api.dev/objects/$id";

$data = [
    "name" => "Updated Student Laptop",
    "data" => [
        "brand" => "Dell",
        "ram" => "32GB",
        "storage" => "1TB SSD"
    ]
];

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);

$response = curl_exec($ch);
echo $response;
curl_close($ch);
?>