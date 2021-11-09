<?php



require "vendor/autoload.php";

$access_token = '7fyOJBtxWLdsDrxANMOTTVa+1S5NlYUwjz0YCGMy/2HyHAqDLS9F9e7YtnoxmDJJNrLUUVNquA5u8eEFFHIh5rh3lhiJ86j07Mly6bKMtSX5jsOkoo7f/T/it09aDpzDnPZWFRGqP8YG5/AuIEsi6AdB04t89/1O/w1cDnyilFU=';

$channelSecret = '3d9d47b804c8cbec3f49996c55902b83';

$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







