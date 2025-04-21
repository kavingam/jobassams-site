<?php
include 'db/pdo_connections.php';
// $pdo = new PDO("mysql:host=localhost;dbname=jobassams_com", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "SELECT title, HEX(hash_key) AS hash_text_key FROM title_data ORDER BY published DESC LIMIT 10";
$stmt = $pdo->query($query);

$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($data);

?>