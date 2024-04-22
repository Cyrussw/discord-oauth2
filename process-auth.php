<?php

$client_id = "";
$client_secret = "";
$redirect_uri = "http://localhost/process-auth.php";
$scope = 'identify';

if (!isset($_GET['code'])) {
    $err_message = "Kod Bulunamadı!";
    exit();
}

$discord_code = $_GET['code'];

$payload = [
    "code" => $discord_code,
    "client_id" => $client_id,
    "client_secret" => $client_secret,
    "grant_type" => 'authorization_code',
    "redirect_uri" => $redirect_uri,
    "scope" => $scope,
];

$payload_string = http_build_query($payload);
$discord_token_url = "https://discordapp.com/api/oauth2/token";

try {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $discord_token_url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // SLL doğrulamasını devre dışı bırakma
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

    $result = curl_exec($ch);

    if (!$result) {
        echo curl_error($ch);
        exit();
    }

    $result = json_decode($result, true);
    echo json_encode($result);
} catch (Exception $e) {
    $err_message = $e->getMessage();
    echo $err_message;
}

?>