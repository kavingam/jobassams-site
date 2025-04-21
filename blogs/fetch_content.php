<?php
include 'db/pdo_connections.php';
if (isset($_GET['id'])) {
    $hashKey = $_GET['id'];

    try {
        $stmt = $pdo->prepare("SELECT content_data FROM content_data WHERE hash_key = UNHEX(:hashKey)");
        $stmt->bindParam(":hashKey", $hashKey, PDO::PARAM_STR);
        $stmt->execute();
        $content = $stmt->fetch();

        if ($content) {
            echo $content['content_data'];
        } else {
            echo "Content not found.";
        }
    } catch (PDOException $e) {
        echo "Database error: " . $e->getMessage();
    }
} else {
    echo "Missing hash key.";
}
?>
