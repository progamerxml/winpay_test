<?php

require __DIR__ . "/../config/baseUrl.php";
$url = getUrl();
$url_curl = $url['dev']['payment'];

function createVa($body, $header){

  global $url_curl;

  $header = [
    "Content-Type: application/json,application/json",
    "X-TIMESTAMP: 2022-12-14T09:07:05+07:00",
    "X-SIGNATURE: 76896286df8a2509af913e62032bd2b9637639a8851c53313367887c15c2f135111c752cc3d2e4c177203276238bdcfaeb02d44f0665b427f437257f59538e80ccbdd1cf99bae979cc615fafd58ab545e0c01ea7a166d928d25c3dceef1b75dea8d224a2af3dd86bf02d5010020fa38ba4e62aac1286e244729c3185f5e19731",
    "X-PARTNER-ID: 962489e9-de5d-4eb7-92a4-b07d44d64bf4",
    "X-EXTERNAL-ID: 0000000002",
    "CHANNEL-ID: PERMATA"
  ];

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