<?php

function setHeader($data){
    $dateISO = date('c');
    $stringToSign = "";
    $private_key = "";
    // $signature = base64_encode(SHA256withRSA($private_key, $stringToSign));
    
    return [
        "Content-Type: application/json,application/json",
        "X-TIMESTAMP: $dateISO",
        "X-SIGNATURE:  ", //$signature
        "X-PARTNER-ID: 962489e9-de5d-4eb7-92a4-b07d44d64bf4", //
        "X-EXTERNAL-ID: 0000000002", //dari pihak winpay
        "CHANNEL-ID: $_GET[additionalInfo][channel]"
    ];
}