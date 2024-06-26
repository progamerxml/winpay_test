<?php

function curl($url_curl, $body, $header)
{
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url_curl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    
    curl_setopt($ch, CURLOPT_POST, TRUE);
    
    curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
    
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    
    $response = curl_exec($ch);
    curl_close($ch);

    return $response;
}

function curlToken($url, $data)
{
    $ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "Content-Type: application/x-www-form-urlencoded",
  "Authorization: Basic $data"
));

$response = curl_exec($ch);
curl_close($ch);

return json_decode($response);
}