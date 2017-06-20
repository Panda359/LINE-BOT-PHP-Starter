<?php
$access_token = 'wyNwDWmwcKmIUbQG5FkjglxrQiOa75M5LKyCbUWgeBSt7dT3UWkV7FHgdT2mjQkBNJk/8ER9a5jO2hydIZJwSE5q0j/veSV3UU89JAP0hEXiSiPo+1kittDzOTiA4Y254IuTo4t6d/WFtWmh3EGD+QdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
