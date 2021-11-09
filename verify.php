<?php
$access_token = '7fyOJBtxWLdsDrxANMOTTVa+1S5NlYUwjz0YCGMy/2HyHAqDLS9F9e7YtnoxmDJJNrLUUVNquA5u8eEFFHIh5rh3lhiJ86j07Mly6bKMtSX5jsOkoo7f/T/it09aDpzDnPZWFRGqP8YG5/AuIEsi6AdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;