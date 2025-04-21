<?php
include 'blogs/db/pdo_connections.php';

// Get POST data and sanitize
$username = trim($_POST['username'] ?? '');
$email = trim($_POST['email'] ?? '');
$message = trim($_POST['message'] ?? '');

// Validate inputs
if (empty($username) || empty($email) || empty($message)) {
    echo "<span class='text-danger'>All fields are required.</span>";
    exit;
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<span class='text-danger'>Invalid email address.</span>";
    exit;
}

try {
    // Check if user already sent message in last 24 hours
    $stmt = $pdo->prepare("SELECT 1 FROM messages WHERE email = ? AND created_at >= NOW() - INTERVAL 1 DAY");
    $stmt->execute([$email]);

    if ($stmt->rowCount() > 0) {
        echo "<span class='text-danger'>You can only send one message every 24 hours.</span>";
    } else {
        // Insert the message
        $insert = $pdo->prepare("INSERT INTO messages (username, email, message) VALUES (?, ?, ?)");
        if ($insert->execute([$username, $email, $message])) {
            echo "<span class='text-success'>Message sent successfully!</span>";
        } else {
            echo "<span class='text-danger'>Failed to send message. Please try again.</span>";
        }
    }
} catch (PDOException $e) {
    echo "<span class='text-danger'>Database error: " . htmlspecialchars($e->getMessage()) . "</span>";
}

// CREATE TABLE messages (
//     id INT AUTO_INCREMENT PRIMARY KEY,
//     username VARCHAR(100),
//     email VARCHAR(100),
//     message TEXT,
//     created_at DATETIME DEFAULT CURRENT_TIMESTAMP
// );

?>
