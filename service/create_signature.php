<?php
require __DIR__ . "/../config/privateKey.php";

function get_signature($data, $url)
{
    $httpMethod = 'POST';
    $endpointUrl = $url;
    $timestamp = $data['timestamp'];
    $payload  = '
    {
        "customerNo": "'.$data['customerNo'].'",
        "virtualAccountName": "'.$data['virtualAccountName'].'",
        "trxId": "'.$data['trxId'].'",
        "totalAmount": {
            "value": "'.$data['value'].'",
            "currency": "'.$data['currency'].'"
        },
        "virtualAccountTrxType": "'.$data['virtualAccountTrxType'].'",
        "expiredDate": "'.$data['expiredDate'].'",
        "additionalInfo": {
            "channel": "'.$data['channel'].'"
        }
    }
    ';
    
    $body = json_decode($payload);
    $hashedBody = strtolower(bin2hex(hash('sha256', json_encode($body, JSON_UNESCAPED_SLASHES), true)));
    
    $stringToSign = [
        $httpMethod,
        $endpointUrl,
        $hashedBody,
        $timestamp
    ];
    
    $signature = '';
    $stringToSign = implode(':', $stringToSign);

    $string_privKey = getPrivateKey();

    $privKey = openssl_get_privatekey($string_privKey);
    openssl_sign($stringToSign, $signature, $privKey, OPENSSL_ALGO_SHA256);
    $encodedSignature = base64_encode($signature);

    return $encodedSignature;
}

function getSignatureOld($data)
{
    $key = getConfigKey();
    $merchant_key = $key['merchant_key'];
    $private_key1 = $key['private_key1'];
    $private_key2 = $key['private_key2'];
    $spi_token = $private_key1.$private_key2;
    $spi_merchant_transaction_reff = "$data[transaction_reff]";
    $spi_amount = "$data[amount]";
    $spi_amount = number_format(doubleval($spi_amount),2,".","");
    $spi_signature = strtoupper(sha1( $spi_token . '|' . $merchant_key . '|' . $spi_merchant_transaction_reff . '|' . $spi_amount . '|0|0' ));

    return $spi_signature;
}
