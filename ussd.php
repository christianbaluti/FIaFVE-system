<?php 

session_start();
// Reads the variables sent via POST
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$text = $_POST["text"];

$response = "END Osadandaula, okupulumusani akubwela";



//echo response
header('Content-type: text/plain');
echo $response;

 ?>