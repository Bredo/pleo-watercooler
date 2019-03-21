<?php
require_once "vendor/autoload.php";
$client = JoliCode\Slack\ClientFactory::create(getenv("SLACK_TOKEN"));

$response = $client->usersList([
    'limit' => 200,
    'cursor' => $cursor,
]);

var_dump($response);


#echo "OK"; ?>