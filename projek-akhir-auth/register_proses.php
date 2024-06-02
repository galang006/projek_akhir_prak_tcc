<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

// Data yang akan dikirimkan ke API
$data = [
    'username' => $username,
    'password' => $password
];

// URL API
$url = 'https://api-dot-prakcloud1.et.r.appspot.com/user/';

// Inisialisasi cURL
$ch = curl_init($url);

// Set opsi cURL
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

// Eksekusi cURL dan mendapatkan respons
$response = curl_exec($ch);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

// Tutup cURL
curl_close($ch);

// Cek respons dari API
if ($http_code == 200) {
    header("Location: login.php");
} else {
    header("Location: register.php?message=failed");
}
?>
