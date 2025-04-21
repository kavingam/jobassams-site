<?php
// $pdo = new PDO("mysql:host=localhost;dbname=jobassams_com", "root", "");
include 'db/pdo_connections.php';
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$category = isset($_GET['category']) ? intval($_GET['category']) : 0; // Default to category 0

$query = "SELECT title, HEX(hash_key) AS hash_text_key 
          FROM title_data 
          WHERE categories = ? 
          ORDER BY published DESC 
          LIMIT 10";  // Get latest 10 records

$stmt = $pdo->prepare($query);
$stmt->execute([$category]);
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($data);
?>
