<?php
// Read the variables sent via POST from our API
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text        = $_POST["text"];

$place = "Chikwawa";
$rescueDial = "*384*202430#"

$response = "CON muthamangile ku " . $place . " kuti akakupulumuseni. \n ngati simungakwanise kuyenda imbani " . $rescueDial . " ndipo mupululumusidwa";

if ($text == "") {
    $response = "CON muthamangile ku " . $place . " kuti akakupulumuseni. \n ngati simungakwanise kuyenda imbani " . $rescueDial . " ndipo mupululumusidwa";
}

// Echo the response back to the API
header('Content-type: text/plain');
echo $response;