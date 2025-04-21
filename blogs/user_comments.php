<?php

// CREATE TABLE `comments_info` (
//   `id` int(11) NOT NULL,
//   `username` varchar(100) NOT NULL,
//   `email` varchar(150) NOT NULL,
//   `comment` text NOT NULL,
//   `hash_key` binary(32) NOT NULL,
//   `created_at` timestamp NULL DEFAULT current_timestamp()
// ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

// --
?>

<?php
include 'db/pdo_connections.php';
header('Content-Type: application/json');

try {
    // Enable exceptions on errors
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Collect and sanitize inputs
    $username = trim($_POST['cmt-username'] ?? '');
    $email = trim($_POST['cmt-email'] ?? '');
    $comment = trim($_POST['cmt-comment'] ?? '');
    $hashHex = trim($_POST['cmt-hash_id'] ?? '');
    $hashBin = hex2bin($hashHex);


    // Validate required fields
    $missingFields = [];
    if (empty($username)) $missingFields[] = 'Username';
    if (empty($email)) $missingFields[] = 'Email';
    if (empty($comment)) $missingFields[] = 'Comment';

    if (!empty($missingFields)) {
        echo json_encode([
            'status' => 'warning',
            'message' => implode(', ', $missingFields) . ' field(s) are required.'
        ]);
        exit;
    }

    // Basic email format validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode([
            'status' => 'warning',
            'message' => 'Invalid email format.'
        ]);
        exit;
    }

    // Validate the hash ID (should be 64-character hex string => 32-byte binary)
    if ($hashBin === false || strlen($hashBin) !== 32) {
        echo json_encode([
            'status' => 'danger',
            'message' => 'Invalid or missing hash key.'
        ]);
        exit;
    }

    // Check if the post accepts comments
    $stmt = $pdo->prepare("SELECT 1 FROM title_data WHERE hash_key = ? LIMIT 1");
    $stmt->execute([$hashBin]);

    if (!$stmt->fetch()) {
        echo json_encode([
            'status' => 'danger',
            'message' => 'This post is not accepting comments.'
        ]);
        exit;
    }

    // Insert the comment
    $stmt = $pdo->prepare("
        INSERT INTO comments_info (username, email, comment, hash_key)
        VALUES (?, ?, ?, ?)
    ");
    $stmt->execute([$username, $email, $comment, $hashBin]);

    echo json_encode([
        'status' => 'success',
        'message' => 'Comment submitted successfully!'
    ]);
} catch (PDOException $e) {
    echo json_encode([
        'status' => 'error',
        'message' => 'Database error: ' . $e->getMessage()
    ]);
    exit;
}
?>
