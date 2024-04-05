<?php
require __DIR__ . "/service/prepare-data.php";
require __DIR__ . "/service/set_header.php";
require __DIR__ . "/service/create-va.php";
require __DIR__ . "/service/inquiry-va.php";
require __DIR__ . "/service/payment-va.php";

if(isset($_GET)){
    $dataCus = prepareData($_GET);
    $header = setHeader($GET);
    $createVa = createVa($dataCus, $header);
    var_dump($dataCus);
}