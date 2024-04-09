<?php

function getPrivateKey(){
    return "-----BEGIN RSA PRIVATE KEY-----
    MIICXAIBAAKBgQDUXSj10fEP1rDHYrKED8CjP3AyBDdtWaEnBWZTSyGT48TLMQZX
    10ZZQ5YrWjvF7cgHl22YJuiePkjr/+tb98ArVVcm2jIWtC35jI19ZI/a5o8rZ/Em
    v7k64zvLXX5TK7ndA5/bvnBznJT54UiaAY9xKC2pBTQkqMlKNo4tYWKUJQIDAQAB
    AoGBAKVKhZEgAWN0lU/70DreD/CAdhFYGtQwCTDYERcPyWjUxd3poKhKVOUxp/bC
    Wvfp5eGSyai90B0rGZMnNMf2hElJuvHNiMViLDfp6f5vQfOQu6Q3LDttc3RLn9sG
    3t+76Kvh/tPwcnPDZUf4JEW6gClALpptW6FoB/d9/3yEZ8xBAkEA/5ClYJC6GoQG
    ePQ0B64hxXknb+s2Vwm6QeyAeP9UE84EoAsKB9GquvvKdwBsOltKC8kDE6/AYVmN
    9e1K94j9GQJBANS5sMc8RaFauZ9odrHde7pb1wIHMNRe6igE1T4J8vbqsSj69WOu
    NfykvcQsoJH8njDriSWR7ZmvUE1SFuYW5O0CP3LNh3zZhsBijoXHLZhFoOYUhqLA
    BqkStZjnpM615A8BfRJn4xmgFhHpCgprJjMQzzJ8GeW+Da2tjRfsgMCxyQJBAMoJ
    YuCXWfqZ1FqWOMVNeknRGDAQ7EuHqhVAIde+U0g4NvKZB58YwqWlQaakTAzbRNNp
    oORR6LxiSX5mTOFTNTECQCtcSqOhK2ibOpBF6xVehpsLx1q/9+zzBkPJlKYigEPR
    HX7BkUUrdBHLI/nZ2y2rXSdPnf3ISs6l/YvFFNa5q3o=
    -----END RSA PRIVATE KEY-----";
}

function getConfigKey()
{
    return [
        "private_key1" => "4d0cba482565a4380286a87848fac600",
        "private_key2" => "2005607b7ba79d210ef38d1c36b433cc",
        "merchant_key" => "be9b9ccbe06adbdab536a45a25f22132",
        "url devel" => "https://sandbox-payment.winpay.id",
        "url production" => "https://secure-payment.winpay.id"
    ];
}

function getPrivateKeyOld()
{
    $key = getConfigKey();
    $private_key1 = $key['private_key1'];
    $private_key2 = $key['private_key2'];
    $base64_encoded_private_key = base64_encode($private_key1 . ":" . $private_key2);

    return $base64_encoded_private_key;
}
