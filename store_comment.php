<?php
include 'blogs/db/pdo_connections.php';

$username = htmlspecialchars($_POST['username'] ?? '', ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($_POST['email'] ?? '', ENT_QUOTES, 'UTF-8');
$comment = htmlspecialchars($_POST['comment'] ?? '', ENT_QUOTES, 'UTF-8');

if (empty($username) || empty($email) || empty($comment)) {
    echo "All fields are required.";
    exit;
}

try {
    $stmt = $pdo->prepare("SELECT COUNT(*) FROM comments WHERE email = ? AND DATE(created_at) = CURDATE()");
    $stmt->execute([$email]);
    $count = $stmt->fetchColumn();

    if ($count >= 100) {
        echo "Comment limit reached (100 per day). Try again tomorrow.";
        exit;
    }

    $insert = $pdo->prepare("INSERT INTO comments (username, email, comment) VALUES (?, ?, ?)");
    $success = $insert->execute([$username, $email, $comment]);

    if ($success) {
        echo "Comment submitted successfully.";
    } else {
        echo "Failed to submit comment.";
    }

} catch (PDOException $e) {
    echo "Server error. Please try again later.";
    // echo "Error: " . $e->getMessage(); // For dev
}
?>
