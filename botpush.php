<?php



require "vendor/autoload.php";

$access_token = 'BNr8KYcKN+wDcyF0maoQBnXD29HeeNu660thrPX6L46BnguiCMcdb7t7qn2zLvMzQ3EJ8LNEHQOGb463bGqzRUDhCajxJ6ET7/RD/WmN2HTUilSGn+SLZDA5DpPBS51qAiPiTsJ+V2KbgDSWoQ2q9wdB04t89/1O/w1cDnyilFU=
';

$channelSecret = 'db40a100f6e0a3ef0d13fb6e9be9a18e';

$pushID = 'Uebe665fec3643a0844c9b3326da595ed';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







