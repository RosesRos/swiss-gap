<?php

$ip_address = $_SERVER['REMORE_ADDR'];

$url = "http://ip-api.com/json/{$ip_address}";

$ch = curl_init();
curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET'
));
$response = curl_exec($ch);
$data = (object) json_decode($response);
curl_close($ch);

$city = $data->city;
print_r('your city' . ' ' . $city);

?>
