<?php
$access_token = '/Wwm2DAh0s7CLhm/o15DNx51IYHHa4sShW/k46CHfdm3Mc1eenakOvVIw/1z+mDfzaaG55en3d+h+fOEplDOoqHEhJ26rSiQTSYA9+/wrpAZ2OZmdLbeT2o4EfK84a2NhtrgPgEeU5udw9AUItPITwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
