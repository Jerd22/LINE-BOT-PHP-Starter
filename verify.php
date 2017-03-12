<?php
$access_token = 'qAvQComCL3LIaF2TYbhegaeJ8ZuP7I/xtCA4Rf53lBtov3ST/FSxlAGC+aJfpRYME88bhT0LjMg9R/NgZaDU6nfCaMbasJjg+N39BgIg4ZTiN5Nt0bzhEB21Kx4ICooFmyiNBEdIrbq4uUprp1qw2wdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>
