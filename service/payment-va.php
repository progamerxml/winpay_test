<?php
require __DIR__ . "/../config/baseUrl.php";
$url = getUrl();
$url_curl = $url['dev']['payment'];
function paymentVA($body, $header){
    
    global $url_curl;
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