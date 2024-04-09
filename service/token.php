<?php

require __DIR__ . "/../config/privateKey.php";
require __DIR__ . "/curl.php";
require __DIR__ . "/../config/baseUrl.php";

function getToken($dataUrl)
{
    $url = $dataUrl['token'];
    $auth = getPrivateKeyOld();
    $token = curlToken($url, $auth);

    return $token->data->token;
}