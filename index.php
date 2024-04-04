<?php

$data = [];
if(isset($_GET)){
    $data["customerNo"]  = $_GET["nomorCustomer"];
    $data["virtualAccountName"]  = $_GET["namaVA"];
    $data["trxId"]  = $_GET["trxId"];
    $data["totalAmount"]  = ["value" => $_GET["value"], "curracy" => "IDR"];
    $data["virtualAccountTrxType"]  = $_GET["vaTrxType"];
    $data["expiredDate"]  = $_GET["expiredDate"];
    $data["additionalInfo"] = [
        "channel" => $_GET["channel"]
    ];
}