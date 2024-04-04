<?php

function getUrl(){

    return [
        "dev" => [
            "createVa" => "https://private-anon-542b824ecd-winpayapisnap.apiary-mock.com/snap/v1.0/transfer-va/create-va",
            "inquiryVa" => "https://private-anon-542b824ecd-winpayapisnap.apiary-mock.com/snap/v1.0/transfer-va/inquiry-va",
            "paymentVa" => "https://private-anon-542b824ecd-winpayapisnap.apiary-mock.com/snap/v1.0/transfer-va/payment"
        ],
        "prod" => [
            "createVa" => "https://sandbox-api.bmstaging.id/snap/v1.0/transfer-va/create-va",
            "inquiryVa" => "https://sandbox-api.bmstaging.id/snap/v1.0/transfer-va/inquiry-va",
            "paymentVa" => "https://sandbox-api.bmstaging.id/snap/v1.0/transfer-va/payment"
        ]
    ];
}