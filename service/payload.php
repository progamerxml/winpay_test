<?php

require __DIR__ . "/../config/baseUrl.php";

function OpenSSLEncrypt($message, $key)
{
$output = false;
$encrypt_method = "AES-256-CBC";
$secret_key = $key;
$secret_iv = $key;
$key = hash('sha256', $secret_key);
$iv = substr(hash('sha256', $secret_iv), 0, 16);
$output = openssl_encrypt($message, $encrypt_method, $key, 0, $iv);
$output = trim(base64_encode($output));
return $output;
}

function getPayload($data){
    $url = get_env();
    $token = getToken($url);
    $json_string = '{
      "cms": "WINPAY API",
      "spi_callback": "https://sandbox-payment.winpay.id/sandbox",
      "url_listener": "https://sandbox-payment.winpay.id/sandbox/url_listener.php",
      "spi_currency": "' . $data['currency'] . '",
      "spi_item": [
        {
          "name": "' . $data['name'] . '",
          "sku": "' . $data['sku'] . '",
          "qty": ' . $data['qty'] . ',
          "unitPrice": ' . $data['unitPrice'] . ',
          "desc": "' . $data['desc'] . '"
        }
      ],
      "spi_amount": ' . $data['spi_amount'] . ',
      "spi_signature": "' . $data['spi_signature'] . '",
      "spi_token": "' . $data['spi_token'] . '",
      "spi_merchant_transaction_reff": "' . $data['spi_merchant_transaction_reff'] . '",
      "spi_billingPhone": "' . $data['spi_billingPhone'] . '",
      "spi_billingEmail": "' . $data['spi_billingEmail'] . '",
      "spi_billingName": "' . $data['spi_billingName'] . '",
      "spi_paymentDate": "' . $data['spi_paymentDate'] . '",
      "get_link": "no"
    }';
    $messageEncrypted = OpenSSLEncrypt($json_string, $token);
    $orderdata = substr($messageEncrypted, 0, 10). $token. substr($messageEncrypted, 10);
    return $orderdata;
}