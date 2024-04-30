<?php
require 'vendor/autoload.php';

use AfricasTalking\SDK\AfricasTalking;

$username = 'your_username';  // Specify your Africa's Talking username
$apiKey   = 'your_apikey';    // Specify your Africa's Talking API Key
$at       = new AfricasTalking($username, $apiKey);

$voice = $at->voice();

try {
    // Get the call details
    $sessionId = $_POST['sessionId'];
    $callerNumber = $_POST['callerNumber'];

    // Answer the call
    header('Content-type: text/plain');
    echo "Accept: application/xml";
    echo "<Response>";
    echo "<Say voice='woman'>Please wait while we record your message.</Say>";
    echo "<Record maxLength='10' callbackUrl='https://your-server.com/callback.php'/>";
    echo "</Response>";

    // Save the call details to the database (implement your own logic here)
    $pdo = new PDO('mysql:host=your_host;dbname=your_db', 'your_db_user', 'your_db_password');
    $stmt = $pdo->prepare('INSERT INTO calls (sessionId, callerNumber) VALUES (?, ?)');
    $stmt->execute([$sessionId, $callerNumber]);
} catch (Exception $e) {
    error_log("Error: " . $e->getMessage());
}
