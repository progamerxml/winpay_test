<?php
// Data yang akan ditandatangani
$data = "Hello, world!";

// Load private key
$private_key = openssl_pkey_get_private("file://path/to/private_key.pem");

// Buat tanda tangan digital menggunakan algoritma SHA256withRSA
if (openssl_sign($data, $signature, $private_key, OPENSSL_ALGO_SHA256)) {
    echo "Tanda tangan digital berhasil dibuat.\n";

    // Konversi tanda tangan ke format base64 agar mudah dibaca
    $signature_base64 = base64_encode($signature);
    echo "Tanda tangan digital (Base64): " . $signature_base64 . "\n";
} else {
    echo "Gagal membuat tanda tangan digital.\n";
}

// Hapus kunci dari memori
openssl_free_key($private_key);
?>
