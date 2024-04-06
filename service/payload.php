<?php

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

function createPayload(){
    $token = "1bdac877ec6294c98e8f105d739370fe";
    $json_string = '{
      "cms": "WINPAY API",
      "spi_callback": "https://sandbox-payment.winpay.id/sandbox",
      "url_listener": "https://sandbox-payment.winpay.id/sandbox/url_listener.php",
      "spi_currency": "IDR",
      "spi_item": [
        {
          "name": "Baju Bali",
          "sku": "01020304",
          "qty": 2,
          "unitPrice": 20000,
          "desc": "Baju Tidur"
        },
        {
          "name": "Baju Jogja",
          "sku": "01020305",
          "qty": 1,
          "unitPrice": 10000,
          "desc": "Baju Olahraga"
        }
      ],
      "spi_amount": 50000,
      "spi_signature": "38697D628FAF2806FCD1844DC895C50CB631C38E",
      "spi_token": "4d0cba482565a4380286a87848fac6002005607b7ba79d210ef38d1c36b433cc",
      "spi_merchant_transaction_reff": "5e4ce7cf7901234",
      "spi_billingPhone": "081234567777",
      "spi_billingEmail": "tester@gmail.com",
      "spi_billingName": "Tester Winpay",
      "spi_paymentDate": "20211231224623",
      "get_link": "no"
    }';
    $messageEncrypted = OpenSSLEncrypt($json_string, $token);
    $orderdata = substr($messageEncrypted, 0, 10). $token. substr($messageEncrypted, 10);
}