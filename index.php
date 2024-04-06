<?php
require __DIR__ . "/service/prepare-data.php";
// require __DIR__ . "/service/set_header.php";
// require __DIR__ . "/service/create-va.php";
// require __DIR__ . "/service/inquiry-va.php";
// require __DIR__ . "/service/payment-va.php";
// require __DIR__ . "/service/payload.php";
require __DIR__ . "/service/create_signature.php";

if(isset($_GET)){
    $dataCus = prepareData($_GET);
    // $header = setHeader($GET);
    // $createVa = createVa($dataCus, $header);
    // $payload = createPayload();
    $signature = get_signature($_GET);
    var_dump($dataCus);
}