<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "Testando conexões SSL...\n";
$url = 'https://8637OGFBC4-dsn.algolia.net/1/indexes/';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
curl_setopt($ch, CURLOPT_CAINFO, "C:/wamp64/bin/php/php8.2.18/cacert.pem");
$response = curl_exec($ch);
if(curl_errno($ch)) {
    echo 'Curl error: ' . curl_error($ch);
} else {
    echo 'Curl response: ' . $response;
}
curl_close($ch);
