<?php

$data = array();
function prepareData($data){
    $data["customerNo"]  = $_GET["nomorCustomer"];
    $data["virtualAccountName"]  = $_GET["namaVA"];
    $data["trxId"]  = $_GET["trxId"];
    $data["totalAmount"]  = ["value" => $_GET["value"], "curracy" => "IDR"];
    $data["virtualAccountTrxType"]  = $_GET["vaTrxType"];
    $data["expiredDate"]  = $_GET["expiredDate"];
    $data["additionalInfo"] = [
        "channel" => $_GET["channel"]
    ];

    json_encode($data);
    return $data;
}

// request create va
// {
//     "customerNo":"1234567890338",
//     "virtualAccountName":"Intan Prasetya",
//     "trxId":"0000000002",
//     "totalAmount":{
//        "value":"10000.00",
//        "currency":"IDR"
//     },
//     "virtualAccountTrxType":"o",
//     "expiredDate":"2023-02-03T12:11:14+07:00",
//     "additionalInfo": {
//          "channel": "BSI"
//      }
//  }
// request payment
//  {
//     "partnerServiceId": " 7873", ok
//     "customerNo": "013100032131", ok
//     "virtualAccountNo": " 7873013100032131", ok
//     "virtualAccountName": "Mas Nchus", ok
//     "trxId": "INV-0000000221", ok
//     "paymentRequestId": "37289",
//     "paidAmount": { ok
//         "value": "70000.00", ok
//         "currency": "IDR" ok
//     },
//     "trxDateTime": "2023-09-21T15:16:42+07:00",
//     "additionalInfo": { ok
//         "contractId": "bmeca61f8e-2d32-4c23-a16e-7cae05a34b2d", ok
//         "channel": "MUAMALAT" ok
//     }
// }
// response create va
// {
//     "responseCode": "2002700",
//     "responseMessage": "Success",
//     "virtualAccountData": {
//         "partnerServiceId": "    9042",
//         "customerNo": "1234567891237",
//         "virtualAccountNo": "    90421234567891237",
//         "virtualAccountName": "Winpay - CHUS PANDI",
//         "trxId": "INV-000000001403",
//         "totalAmount": {
//             "value": "16000.00",
//             "currency": "IDR"
//         },
//         "virtualAccountTrxType": "c",
//         "expiredDate": "2023-09-04T19:30:14+07:00",
//         "additionalInfo": {
//             "channel": "BSI",
//             "contractId": "sie22a147b-1d12-4625-af81-0e40fcac0b11"
//         }
//     }
// }