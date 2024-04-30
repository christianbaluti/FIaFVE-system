<?php
header('Content-Type: application/json');

$pdo = new PDO('mysql:host=chaintechhub.com;dbname=u953672825_call', 'u953672825_call', 'Manners makes a man1722*');

$stmt = $pdo->query('SELECT callerNumber, recordingUrl FROM calls');
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($results);
