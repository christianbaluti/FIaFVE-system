<?php
$recordingUrl = $_POST['recordingUrl'];
$sessionId = $_POST['sessionId'];
$pdo = new PDO('mysql:host=your_host;dbname=your_db', 'your_db_user', 'your_db_password');
$stmt = $pdo->prepare('UPDATE calls SET recordingUrl = ? WHERE sessionId = ?');
$stmt->execute([$recordingUrl, $sessionId]);
?>