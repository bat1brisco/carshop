<?php
session_start();
//example of sending an sms using an API key / secret
	
require_once 'SMS/autoload.php';

//create client with api key and secret
$client = new Nexmo\Client(new Nexmo\Client\Credentials\Basic('1b89cedf', '58ea0f6a9f67ca5b'));

//send message using simple api params
$message = $client->message()->send([
    'to' => $_SESSION['number'],
    'from' => "CARSHOP",
    'text' => $_SESSION['message']
]);

//array access provides response data
echo "Sent message to " . $message['to'] . ". Balance is now " . $message['remaining-balance'] . $message['text'].  PHP_EOL;

sleep(1);