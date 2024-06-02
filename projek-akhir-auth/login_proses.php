<?php

$username = $_POST['username'];
$password = $_POST['password'];

$url = 'https://api-dot-prakcloud1.et.r.appspot.com/user/' . urlencode($username);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($http_code == 200) {
    $user_data = json_decode($response, true);

    if (!empty($user_data)) {
        if ($user_data[0]['password'] === $password) {
            header("Location: https://jadwal-dot-prakcloud1.et.r.appspot.com/index.php");
            exit();
        } else {
            header("Location: login.php?message=failed");
            exit();
        }
    } else {
        header("Location: login.php?message=failed");
        exit();
    }
} else {
    header("Location: login.php?message=failed");
    exit();
}
?>
