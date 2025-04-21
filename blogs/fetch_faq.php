<?php
// Database Connection
$host = "localhost";
$user = "hmvfuvpn_jobassams_com"; 
$pass = "Teckaz5ztT69zCqbntgH"; 
$dbname = "hmvfuvpn_jobassams_com"; 

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Get hash_key from URL parameter
$hash_key = isset($_GET['hash_key']) ? $_GET['hash_key'] : '';

if (!$hash_key) {
    echo json_encode(["error" => "Missing hash key"]);
    exit;
}

// Convert hex to binary for MySQL storage
$binary_hash_key = hex2bin($hash_key);

// Fetch FAQs matching the hash_key
$stmt = $conn->prepare("SELECT t1, t2 FROM faq_data WHERE hash_key = ?");
$stmt->execute([$binary_hash_key]);
$faqs = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Return JSON response
echo json_encode($faqs);
?>
