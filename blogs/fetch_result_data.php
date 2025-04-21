<?php
// $pdo = new PDO("mysql:host=localhost;dbname=jobassams_com", "root", "");
include 'db/pdo_connections.php';
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$limit = 10; 
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $limit;

// Fetch data for category 0 only
$query = "SELECT title, HEX(hash_key) as hash_key FROM title_data WHERE categories = 2 ORDER BY published DESC LIMIT :limit OFFSET :offset";
$stmt = $pdo->prepare($query);
$stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Total Pages
$totalQuery = "SELECT COUNT(*) FROM title_data WHERE categories = 2";
$totalStmt = $pdo->query($totalQuery);
$totalRows = $totalStmt->fetchColumn();
$totalPages = ceil($totalRows / $limit);

echo json_encode([
    "data" => $data,
    "currentPage" => $page,
    "totalPages" => $totalPages
]);
?>
