<?php
// Require the bundled autoload file - the path may need to change
// based on where you downloaded and unzipped the SDK
require __DIR__ . './twilio/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$sid = 'ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX';
$token = 'your_auth_token';
// A Twilio number you own with SMS capabilities
$twilio_number = "+15XXXXXXXXX";

$receiver_number = "+639XXXXXXXXX";
$client = new Client($sid, $token);

// Use the client to do fun stuff like send text messages!
$send_sms = $client->messages->create(
    $receiver_number, // the number you'd like to send the message to
    [
        'from' => $twilio_number,// A Twilio phone number you purchased at twilio.com/console
        'body' => "Test Send!" // the body of the text message you'd like to send
    ]
);

// echo "<br>";
// echo "SID:" . $send_sms->sid;
// echo "<br>";

// REF: https://www.twilio.com/docs/libraries/php
//      https://www.twilio.com/docs/sms/send-messages
//      https://github.com/twilio/twilio-php
