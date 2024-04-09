<?php
// require __DIR__ . "/service/prepare-data.php";
// require __DIR__ . "/service/set_header.php";
// require __DIR__ . "/service/create-va.php";
// require __DIR__ . "/service/inquiry-va.php";
// require __DIR__ . "/service/payment-va.php";
// require __DIR__ . "/service/payload.php";
// require __DIR__ . "/service/create_signature.php";
require_once __DIR__ . "/service/token.php";
require_once __DIR__ . "/config/baseUrl.php";

if(isset($_GET)){
    $url = get_env();
    // $dataCus = prepareData($_GET);
    // $header = setHeader($GET);
    // $createVa = createVa($dataCus, $header);
    // $payload = createPayload();
    // $signature = get_signature($_GET);
    $tokenData = getToken($url);
    print_r($tokenData);
}