<?php

function inquiryVa($body, $header){

    $ch = curl_init();
    
    curl_setopt($ch, CURLOPT_URL, "https://private-anon-542b824ecd-winpayapisnap.apiary-mock.com/snap/v1.0/transfer-va/inquiry-va");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    
    curl_setopt($ch, CURLOPT_POST, TRUE);
    
    curl_setopt($ch, CURLOPT_POSTFIELDS, "{
      \"trxId\": \"INV-000000023212x22\",
      \"additionalInfo\": {
        \"contractId\": \"ci302a21c9-bb4b-40c5-880d-e99691ed0af9\"
      }
    }");
    
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
      "Content-Type: application/json,application/json",
      "X-TIMESTAMP: 2022-12-14T09:07:05+07:00",
      "X-SIGNATURE: 18316aeef75025c3eae8b1ef73522faf2ca710adc470c2d2762bc6454d281d439d0979acf6dc537befa4fe54bc1baaa22d96db445128b9eb172bf1550044bfe041fe25c1ef69e36ffd16437f27cfa62726971837cee9b18b5f165d78647b04c617354b1183d696fab7d96e3fbe48875c627b0e73a4d137d31f89ce0f74c04402",
      "X-PARTNER-ID: 962489e9-de5d-4eb7-92a4-b07d44d64bf4",
      "X-EXTERNAL-ID: 73284rwuiesdjh11",
      "CHANNEL-ID: BCA"
    ));
    
    $response = curl_exec($ch);
    curl_close($ch);

}