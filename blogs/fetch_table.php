<?php
// $dsn = "mysql:host=localhost;dbname=mydb;charset=utf8mb4";
// $username = "root";
// $password = "";
include 'db/pdo_connections.php';
try {
    // Create a PDO connection
    // $pdo = new PDO($dsn, $username, $password, [
    //     PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    //     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    // ]);

    // Fetch data
    $stmt = $pdo->prepare("SELECT unique_id, content_title, content_link FROM content_table ORDER BY unique_id ASC");
    $stmt->execute();
    $data = $stmt->fetchAll();

    // Return JSON response
    echo json_encode($data);

} catch (PDOException $e) {
    echo json_encode(["error" => "Database error: " . $e->getMessage()]);
}
/*
INSERT INTO `content_table` (`unique_id`, `content_title`, `content_link`) VALUES
('1001', 'Larry the Bird', 'https://example.com/link1'),
('1002', 'John Doe', 'https://example.com/link2'),
('1003', 'Jane Smith', 'https://example.com/link3');
CREATE TABLE IF NOT EXISTS `content_table` (
    `unique_id` CHAR(4) NOT NULL,
    `content_title` VARCHAR(255) NOT NULL,
    `content_link` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`unique_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;



INSERT INTO `content_table` (`unique_id`, `content_title`, `content_link`) VALUES
('1003', 'Images Sizer', 'https://example.com/link1'),
('1004', 'Background Remover', 'https://example.com/link2');

*/
?>

