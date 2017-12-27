

<?php

$credentials = new Nexmo\Client\Credentials\Basic('1b89cedf', '58ea0f6a9f67ca5b');
$client = new Nexmo\Client($credentials);

$message = $client->message()->send([
  'from' => 'Nexmo',
  'to' => '+639167692068',
  'text' => 'A text message sent using the Nexmo SMS API Testing rani.'
]);

