<?php

$data = array();
function prepareData($data){
    $data["customerNo"]  = $_GET["nomorCustomer"];
    $data["virtualAccountName"]  = $_GET["namaVA"];
    $data["trxId"]  = $_GET["trxId"];
    $data["totalAmount"]  = ["value" => $_GET["value"], "currency" => "IDR"];
    $data["virtualAccountTrxType"]  = "c";
    $data["expiredDate"]  = $_GET["expiredDate"];
    $data["additionalInfo"] = [
        "channel" => $_GET["channel"]
    ];
    $data["timestamp"] = date('c');

    json_encode($data);
    return $data;
}